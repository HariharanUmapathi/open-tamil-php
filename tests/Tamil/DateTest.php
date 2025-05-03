<?PHP

use PHPUnit\Framework\TestCase;
use Tamil\DateTimeTamil;



class DateTest extends TestCase
{
    private $dateTamil;
    private $date;
    function __construct()
    {
        parent::__construct();
        $this->dateTamil = new DateTimeTamil();
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
    function testWeekFormatofDate()
    {
        $this->assertEquals([
            $this->dateTamil->format('W')
        ], [
            $this->date->format('W')
        ]);
    }
    function testMonthFormatofDate()
    {
        $this->assertEquals([
            $this->dateTamil->format("F"),
            $this->dateTamil->format("m"),
            $this->dateTamil->format("M"),
            $this->dateTamil->format("n"),
        ], [
            "ஏப்ரல்",
            $this->date->format("m"),
            "ஏப்",
            $this->date->format('n')
        ]);
    }
    function testYearformatofDate()
    {
        $this->assertEquals([
            $this->dateTamil->format("L"),
            $this->dateTamil->format("o"),
            $this->dateTamil->format("X"),
            $this->dateTamil->format("x"),
            $this->dateTamil->format("Y"),
            $this->dateTamil->format("y"),
        ], [
            $this->date->format("L"),
            $this->date->format("o"),
            $this->date->format("X"),
            $this->date->format("x"),
            $this->date->format("Y"),
            $this->date->format("y")
        ]);
    }
    function testTamilLocaleSupport()
    {

        /* Set locale to Dutch */
        setlocale(LC_ALL, 'ta_IN.UTF-8');

        /* Output: vrijdag 22 december 1978 */
        $this->assertTrue("வெள்ளி 22 டிசம்பர் 1978"==strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978)),"Tamil weeks and month representation is working") ;

        /* try different possible locale names for german */
        $loc_de = setlocale(LC_ALL, 'ta_IN', 'ta-IN');
        $this->assertFalse($loc_de === false, "Preferred locale for Tamil on this system is '$loc_de'");
        $this->assertNotEmpty($loc_de);
        $this->assertFalse($loc_de === false, "Tamil India Availalable");
    }
}
