<?PHP

use PHPUnit\Framework\TestCase;
use Tamil\UTF8;

require_once 'src/bootstrap.php';

class UTF8Test extends TestCase
{
    public function testIsNormalised()
    {
        $input = ['த', 'மி', 'பொ', 'போ', 'கொ', 'கோ', 'கௌ', 'கெள', 'ாகெ'];
        $expected = [true, true, true, true, true, true, true, true, true];
        $actual = array_map(function ($input) {
            return UTF8::isNormalized($input);
        }, $input);

        $this->assertEquals($expected, $actual);
    }
    public function testallTamilTextV1()
    {
        $testCases = ["தமிழ்", "சீவக"];
        $actual = array_map(function ($input) {
            return UTF8::allTamilTextV1($input);
        }, $testCases);
        $expected = [true, true];
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function testIsNormalizedWithCanonicalCharacter()
    {
        $this->assertTrue(UTF8::isNormalized("க"));
        $this->assertTrue(UTF8::isNormalized("பா")); // canonical representation
    }

    /** @test */
    public function testIsNormalizedWithNonCanonicalCharacter()
    {
        $nonCanonical = "பெ"; // might be decomposed as "ப" + "ெ"
        $this->assertIsBool(UTF8::isNormalized($nonCanonical));
    }

    /** @test */
    public function testIsTamilUnicodeCodept()
    {
        $this->assertTrue(UTF8::isTamilUnicodeCodept("அ"));
        $this->assertFalse(UTF8::isTamilUnicodeCodept("A"));
    }

    /** @test */
    public function testSplitMeiUyirWithUyir()
    {
        $this->assertEquals(["க்","ஆ"], UTF8::splitMeiUyir("கா"));
    }

    /** @test */
    public function testSplitMeiUyirWithMeiUyir()
    {
        $result = UTF8::splitMeiUyir("கி");
        $this->assertIsArray($result);
        $this->assertEquals("க்", $result[0]);
        $this->assertEquals("இ", $result[1]);
    }

    /** @test */
    public function testJoinMeiUyirWithValidInputs()
    {
        $this->assertEquals("கி", UTF8::joinMeiUyir("க்", "இ"));
        $this->assertEquals("அ", UTF8::joinMeiUyir("", "அ"));
        $this->assertEquals("க்", UTF8::joinMeiUyir("க்", ""));
    }

    /** @test */
    public function testHex2UnicodeAndUnicode2HexConsistency()
    {
        $original = "சுகா";
        $hex = UTF8::unicode2hex($original);
        $reverted = UTF8::hex2unicode($hex);
        $this->assertEquals($original, $reverted);
    }

    /** @test */
    public function testIsTamilUnicode()
    {
        $this->assertTrue(UTF8::isTamilUnicode("அ"));
        $this->assertFalse(UTF8::isTamilUnicode("Z"));
    }
}
