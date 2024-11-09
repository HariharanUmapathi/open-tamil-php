<?PHP 

namespace hariharan\Setup;

class Setup {
    public function __construct($argc,$argv) {
        $this->argumentHandler($argc,$argv);
        if($argc==0)
        $this->initialSetup();   
    }
    private function argumentHandler($argc,$argv) {
            switch($argv[1]){
                case "create-testcase":
                    $this->createTestCaseFile($argv[2]);
                break;
                default: {
                    echo "Unspecified Operation";
                    exit();
                }
                
            }
        
    }
    private function initialSetup(){
        echo "Setting up development environment for open-tamil-php".PHP_EOL;
        echo "Setting up PHP CS Fixer".PHP_EOL;
        system("mkdir -p tools/php-cs-fixer");
        system("composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer");
    }
    private function createTestCaseFile($testCaseFileName){
        if(!file_exists("./tests/{$testCaseFileName}.php")){
            $testCaseTemplate = file_get_contents("./tests/Template.php");
            $newTemplate = str_replace("_TestTemplate",$testCaseFileName,$testCaseTemplate);
            file_put_contents("./tests/".$testCaseFileName.".php",$newTemplate);
        }else {
            echo "File $testCaseFileName already exists!".PHP_EOL;
        }
        
    }
}
new Setup($argc,$argv);
