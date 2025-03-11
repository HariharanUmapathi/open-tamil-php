<?php

use PHPUnit\Framework\TestCase;
use Tamil\UTF8;

final class SetupTest extends TestCase
{
    public function testmbStringExtensionLoaded()
    {
        $this->assertTrue(extension_loaded('mbstring'));
    }

    public function testCharacterSetTestCase()
    {
        $this->assertFalse(false);
    }
    public function testcharacterDataProvider()
    {
        $this->assertTrue(true);
    }
    public function testHasEnglish()
    {
        $expected = [true,true,false,false];
        $word_list = ["Tamil", "Telugu", "தமிழ்", "கிரேக்கம்"];
        $actual = array_map(function ($word) {
            return UTF8::hasEnglish($word);
        }, $word_list);
        $this->assertEquals($expected, $actual);
    }
    public function testMethodtoUnicodeRepr()
    {
        $expected = "u'\\u0048\\u0061\\u0072\\u0069\\u0068\\u0061\\u0072\\u0061\\u006e\\u0020\\u0ba4\\u0bae\\u0bbf\\u0bb4\\u0bcd'";
        $actual = UTF8::toUnicodeRepr("Hariharan தமிழ்");
        $this->assertEquals($expected, $actual);
    }
    public function testMethodletterToPy()
    {
        $expected = ["u'அ'","u'ஆ'","u'இ'","u'ஈ'","u'உ'","u'ஊ'","u'எ'","u'ஏ'","u'ஐ'","u'ஒ'","u'ஓ'","u'ஔ'"];
        $actual = UTF8::toArray(join(UTF8::UYIR_LETTERS));
        $this->assertEquals($expected, $actual);
    }
}
