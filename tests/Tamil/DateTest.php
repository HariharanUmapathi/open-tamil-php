<?PHP

use PHPUnit\Framework\TestCase;
use Tamil\DateTimeTamil;



class DateTest extends TestCase
{
    private $dateTamil;
    private $date;
    function __construct(){
        parent::__construct();
        $this->dateTamil=new DateTimeTamil();
        $this->dateTamil->setDate('2025', '04', '30');
        $this->date = new DateTime();
        $this->date->setDate(2025, 04, 30);
    }
    function testDayFormatofDate()
    {
        $dateTamil = $this->dateTamil;
        $date = $this->date;
        $this->assertEquals([
            $dateTamil->format('d'),
            $dateTamil->format('D'),
            $dateTamil->format('j'),
            $dateTamil->format('l'),
            $dateTamil->format('N'),
            $dateTamil->format("S"),
            $dateTamil->format("w"),
            $dateTamil->format("z")
        ], [
            $date->format('d'),
            "புதன்",
            $date->format('j'),
            "புதன்கிழமை",
            $date->format('N'),
            "வது",
            $date->format('w'),
            $date->format('z')
        ]);
    }
    function testWeekFormatofDate(){
        $this->assertEquals([
            $this->dateTamil->format('W')
        ],[
            $this->date->format('W')
        ]);
    }
    function testMonthFormatofDate(){
        $this->assertEquals([
            $this->dateTamil->format("F"),
            $this->dateTamil->format("m"),
            $this->dateTamil->format("M"),
            $this->dateTamil->format("n"),
        ],[
            "ஏப்ரல்",
            $this->date->format("m"),
            "ஏப்",
            $this->date->format('n')
        ]);

    }
}
