<?php

class PortStatusChecker
{
    private $mapping;
    private $report;
    public function __construct($mappingFile)
    {
        $this->mapping = json_decode(file_get_contents($mappingFile), true);
        $this->report = [];
    }
    public function analyzePythonFile($pythonFile)
    {

        $file_name = pathinfo($pythonFile, PATHINFO_BASENAME);
        $dir = __DIR__;
        exec("python3 {$dir}/extractSymbols.py {$pythonFile}", $output, $result_code);
        $symbols = json_decode(join("", $output), true);

        $report = [];
        foreach ($symbols as $index => $property) {
            $symbol = $property['symbol'];

            if (isset($this->mapping[$symbol])) {
                $report[$symbol] = $this->mapping[$symbol];
            } else {
                $report[$symbol] = [
                    "file_name" => $file_name,
                    "php_equivalent" => null,
                    "status" => "missing",
                    "notes" => "NO mapping found",
                    "testing" => "not done",
                    "documentation" => "not done"
                ];
            }
        }
        file_put_contents("mapping_report_{$file_name}.json", json_encode($report, JSON_PRETTY_PRINT));
        $this->report = $report;
        return $report;
    }
    public function exportReport()
    {
        echo "<table border='1' cellpadding=5>";
        echo "<tr>
            <th>S.NO</th>
            <th>Python Symbol</th>
            <th>PHP Equivalent</th>
            <th>Status</th>
            <th>Testing</th>
            <th>Documentation</th>
            <th>Notes</th>
    </tr>";
        $sno = 1;
        foreach ($this->report as $py => $info) {
            echo "<tr>
            <td> $sno</td>
            <td>{$py}</td>
            <td>{$info['php_equivalent']}</td>
            <td>{$info['status']}</td>
            <td>{$info['testing']}</td>
            <td>{$info['documentation']}</td>
            <td>{$info['notes']}</td>
            </tr>
        ";
            $sno++;
        }

        echo "</table>";
    }
    public function getProgress(){
        $total = count($this->mapping);
        $counts = ["ported" => 0, "in-progress" => 0, "missing" => 0 ,"testing" => 0, "documentation" => 0 ];

        foreach ($this->mapping as $entry) {
            $status = strtolower($entry["status"]);
            if (isset($counts[$status])) {
                $counts[$status]++;
            }
            if(isset($entry['testing']) && $entry['testing']=="done") {
                $counts['testing']++;
            }
            if(isset($entry['documentation']) && $entry['documentation']=="done") {
                $counts['documentation']++;
            }
        }

        $percent = $total > 0 ? round(($counts["ported"] / $total) * 100, 2) : 0;
        $percent_testing = $total > 0 ? round(($counts['testing']/$total) * 100,2):0;
        $percent_documented = $total > 0 ? round(($counts['documentation']/$total) * 100,2):0;
        return [
            "total" => $total,
            "counts" => $counts,
            "percent" => $percent,
            "tested" => $percent_testing,
            "documented" => $percent_documented
        ];
    }
}

//Example Usage 

$tracker = new PortStatusChecker("./src/mapping.json");

$result = $tracker->analyzePythonFile("/home/hariharan/open-workspace/open-tamil/tamil/utf8.py");
// To Export 
// $tracker->exportReport();
$progress = $tracker->getProgress();
echo "Total symbols: {$progress['total']}\n";
echo "Ported: {$progress['counts']['ported']}\n";
echo "In Progress: {$progress['counts']['in-progress']}\n";
echo "Missing: {$progress['counts']['missing']}\n";
echo "Testing: {$progress['counts']['testing']} ({$progress['tested']}%)\n";
echo "Documentation : {$progress['counts']['documentation']} ({$progress['documented']}%) \n";
echo "Completion: {$progress['counts']['ported']}/{$progress['total']} {$progress['percent']}%\n";