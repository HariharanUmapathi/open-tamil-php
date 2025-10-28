<?php

namespace Tamil\Encoding;

class TSCII
{
    public static function convertToUTF8($string)
    {
        return iconv("UTF-8", "TSCII", $string);
    }
    public static function convertToTSCII($string)
    {
        return iconv("TSCII", "UTF-8", $string);
    }
}
