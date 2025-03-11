<?php

use PHPUnit\Framework\TestCase;
use Tamil\UTF8;

final class MathiraiTest extends TestCase
{
    public function testcalculateUyirNedilKurilMathirai(){
        
        $expected = [
            "தமிழ்"=> 2.5,
            "காதல்"=> 3.5,
            "ஸ்"=> 0.0,
            "குகன்"=> 2.5,
            "ப்ரீதா"=> 4.5,
            "யாரது"=>3
        ];
        $actual = array_map(function($word){
           return UTF8::totalMaathirai($word);
        },array_keys($expected));
        $this->assertEquals(array_values($expected),$actual);

    }
}