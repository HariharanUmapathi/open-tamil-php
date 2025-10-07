<?php

namespace Tamil\Encoding;

class TSCII
{
    protected $map = [];

    public function print_table()
    {
    }
    public function convert_to_unicode_from_bytes()
    {
    }
    public function convert_unicode()
    {
    }
    public function convert_to_unicode()
    {
    }
    public function tscii_convert($str, $map)
    {
        $out = '';
        foreach (unpack('C*', $str) as $byte) {
            if ($byte < 128) {
                $out .= chr($byte);
            } elseif (isset($map[$byte]) && $map[$byte]) {
                $out .= mb_convert_encoding("&#{$map[$byte]};", 'UTF-8', 'HTML-ENTITIES');
            } else {
                $out .= '?';
            }
        }
        return $out;
    }

}
