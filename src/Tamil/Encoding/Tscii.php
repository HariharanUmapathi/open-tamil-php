<?php

namespace Tamil\Encoding;

class TSCII
{
    protected static $TSCII_POST_MODIFIER;
    protected static $TSCII_PRE_MODIFIER;
    protected static $map = [];
    public static function getMap()
    {
        self::$TSCII_POST_MODIFIER = [0xAA, 0xA1];
        self::$TSCII_PRE_MODIFIER = [0xA6, 0xA7, 0xA8];

        if (count(self::$map) == 256) {
            return self::$map;
        }
        self::$map = array_map(function ($x) {
            return $x < 128 ? chr($x) : "?";
        }, range(0, 255));
        self::$map[0xAB] = "அ";
        self::$map[0xAC] = "ஆ";
        self::$map[0xAD] = "இ";
        self::$map[0xAE] = "ஈ";
        self::$map[0xAF] = "உ";
        self::$map[0xB0] = "ஊ";
        self::$map[0xB1] = "எ";
        self::$map[0xB2] = "ஏ";
        self::$map[0xB3] = "ஐ";
        self::$map[0xB4] = "ஒ";
        self::$map[0xB5] = "ஓ";
        self::$map[0xB6] = "ஔ";
        self::$map[0xB7] = "ஃ";
        //Consonants 
        self::$map[0xB8] = "க";
        self::$map[0xB9] = "ங";
        self::$map[0xBA] = "ச";
        self::$map[0xBB] = "ஞ";
        self::$map[0xBC] = "ட";
        self::$map[0xBD] = "ண";
        self::$map[0xBE] = "த";
        self::$map[0xBF] = "ந";
        self::$map[0xC0] = "ப";
        self::$map[0xC1] = "ம";
        self::$map[0xC2] = "ய";
        self::$map[0xC3] = "ர";
        self::$map[0xC4] = "ல";
        self::$map[0xC5] = "வ";
        self::$map[0xC6] = "ழ";
        self::$map[0xC7] = "ள";
        self::$map[0xC8] = "ற";
        self::$map[0xC9] = "ன";
        //Grantha 
        self::$map[0x83] = "ஜ"; // Je
        self::$map[0x84] = "ஷ"; // SSA - U+0BB7
        self::$map[0x85] = "ஸ"; // SA  - U+0BB8
        self::$map[0x86] = "ஹ"; // HA  - U+0BB9
        //Grantha/Mei forms 
        // Grantha / Mei forms
        self::$map[0x88] = "ஜ்";       // iJ
        self::$map[0x89] = "ஷ்";       // iSS - \u0BB7\u0BCD
        self::$map[0x8A] = "ஸ்";       // iS  - \u0BB8\u0BCD
        self::$map[0x8B] = "ஹ்";       // iH  - \u0BB9\u0BCD

        // Sec. 3 - Tamil numerals
        self::$map[0x80] = "௦"; // Tamil digit 0 - U+0BE6
        self::$map[0x81] = "௧"; // Tamil digit 1 - U+0BE7
        self::$map[0x8D] = "௨"; // Tamil digit 2 - U+0BE8
        self::$map[0x8E] = "௩"; // Tamil digit 3 - U+0BE9
        self::$map[0x8F] = "௪"; // Tamil digit 4 - U+0BEA
        self::$map[0x90] = "௫"; // Tamil digit 5 - U+0BEB
        self::$map[0x95] = "௬"; // Tamil digit 6 - U+0BEC
        self::$map[0x96] = "௭"; // Tamil digit 7 - U+0BED
        self::$map[0x97] = "௮"; // Tamil digit 8 - U+0BEE
        self::$map[0x98] = "௯"; // Tamil digit 9 - U+0BEF
        self::$map[0x9D] = "௰"; // Tamil digit 10 - U+0BF0
        self::$map[0x9E] = "௱"; // Tamil digit 100 - U+0BF1
        self::$map[0x9F] = "௲"; // Tamil digit 1000 - U+0BF2
        # Sec. 4.1 - Grantha ligatures
        self::$map[0x82] = "ஶ்ரீ";   // SRI - \u0BB6\u0BCD\u0BB0\u0BC0
        self::$map[0x87] = "க்ஷ";    // KSHA - \u0B95\u0BCD\u0BB7
        self::$map[0x8C] = "க்ஷ்";   // KSH  - \u0B95\u0BCD\u0BB7\u0BCD

        // Tamil Mei letters (consonant + pulli)
        self::$map[0xEC] = "க்";
        self::$map[0xED] = "ங்";
        self::$map[0xEE] = "ச்";
        self::$map[0xEF] = "ஞ்";
        self::$map[0xF0] = "ட்";
        self::$map[0xF1] = "ண்";
        self::$map[0xF2] = "த்";
        self::$map[0xF3] = "ந்";
        self::$map[0xF4] = "ப்";
        self::$map[0xF5] = "ம்";
        self::$map[0xF6] = "ய்";
        self::$map[0xF7] = "ர்";
        self::$map[0xF8] = "ல்";
        self::$map[0xF9] = "வ்";
        self::$map[0xFA] = "ழ்";
        self::$map[0xFB] = "ள்";
        self::$map[0xFC] = "ற்";
        self::$map[0xFD] = "ன்";

        // Sec.4.3 Ukara series
        self::$map[0xCC] = "கு";
        self::$map[0x99] = "ஙு";
        self::$map[0xCD] = "சு";
        self::$map[0x9A] = "ஞு";
        self::$map[0xCE] = "டு";
        self::$map[0xCF] = "ணு";
        self::$map[0xD0] = "து";
        self::$map[0xD1] = "நு";
        self::$map[0xD2] = "பு";
        self::$map[0xD3] = "மு";
        self::$map[0xD4] = "யு";
        self::$map[0xD5] = "ரு";
        self::$map[0xD6] = "லு";
        self::$map[0xD7] = "வு";
        self::$map[0xD8] = "ழு";
        self::$map[0xD9] = "ளு";
        self::$map[0xDA] = "று";
        self::$map[0xDB] = "னு";

        self::$map[0x9B] = "ஙூ";
        self::$map[0x9C] = "ஞூ";
        self::$map[0xDC] = "கூ";
        self::$map[0xDD] = "சூ";
        self::$map[0xDE] = "டூ";
        self::$map[0xDF] = "ணூ";
        self::$map[0xE0] = "தூ";
        self::$map[0xE1] = "நூ";
        self::$map[0xE2] = "பூ";
        self::$map[0xE3] = "மூ";
        self::$map[0xE4] = "யூ";
        self::$map[0xE5] = "ரூ";
        self::$map[0xE6] = "லூ";
        self::$map[0xE7] = "வூ";
        self::$map[0xE8] = "ழூ";
        self::$map[0xE9] = "ளூ";
        self::$map[0xEA] = "றூ";
        self::$map[0xEB] = "னூ";

        self::$map[0xCA] = "டி";
        self::$map[0xCB] = "டீ";
        //Post Modifires
        self::$map[0xA1] = "ா"; // U+0BBE - Aa
        self::$map[0xA2] = "ி"; // U+0BBF - I
        self::$map[0xA3] = "ீ"; // U+0BC0 - II
        self::$map[0xA4] = "ு"; // U+0BC1 - U
        self::$map[0xA5] = "ூ"; // U+0BC2 - UU

        // Sec. 5.2 - pre modifiers
        self::$map[0xA6] = "ெ"; // U+0BC6
        self::$map[0xA7] = "ே"; // U+0BC7
        self::$map[0xA8] = "ை"; // U+0BC8
        # its not exactly this symbol - but a composite mapping
        self::$map[0xAA] = "ௌ";

        // Sec. 6 - five other non-Tamil specific characters
        self::$map[0x91] = "‘"; // U+2018 left single quote
        self::$map[0x92] = "’"; // U+2019 right single quote
        self::$map[0x93] = "“"; // U+201C left double quote
        self::$map[0x94] = "”"; // U+201D right double quote
        self::$map[0xA9] = "©"; // U+00A9 Copyright Sign

        self::$map[0xFE] = "இ";
        return self::$map;
    }
    public function print_table() {}
    public function convert_to_unicode_from_bytes() {}
    public function convert_unicode() {}
    public static function convertToUnicode(string $tsciiInput): string
    {
        $output = [];
        $prev = null;
        $prev2x = null;

        // iterate through each byte
        $chars = preg_split('//u', $tsciiInput, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($chars as $char) {
            $code = ord($char);

            if ($code < 128) {
                // base ASCII - direct copy
                $output[] = $char;
                $prev = null;
                $prev2x = null;
            } elseif (in_array($code, self::$TSCII_DIRECT_LOOKUP ?? [])) {
                if (in_array($prev, self::$TSCII_PRE_MODIFIER ?? [])) {
                    $currChar = [self::$map[$code] ?? '', self::$map[$prev] ?? ''];
                } else {
                    $currChar = [self::$map[$code] ?? ''];
                    $char = null;
                }
                $output = array_merge($output, $currChar);
            } elseif (in_array($code, self::$TSCII_POST_MODIFIER ?? [])) {
                if (
                    in_array($prev, self::$TSCII_DIRECT_LOOKUP ?? []) &&
                    in_array($prev2x, self::$TSCII_PRE_MODIFIER ?? [])
                ) {

                    $len = count($output);
                    if ($len >= 2) {
                        array_splice($output, -2);
                    } elseif ($len == 1) {
                        array_pop($output);
                    }
                    $output[] = self::$map[$prev] ?? '';
                    $output[] = self::$map[$prev2x] ?? '';
                } else {
                    // malformed input warning
                    // echo "Warning: malformed TSCII encoded file; skipping characters\n";
                }

                $prev = null;
                $char = null;
            } else {
                // unrecognized or modifier - skip
            }

            $prev2x = $prev;
            if ($char !== null) {
                $prev = $code;
            }
        }

        return implode('', $output);
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

foreach (TSCII::getMap() as $key => $value) {
    echo "$key :" . dechex($key) . ": $value" . PHP_EOL;
}
$tscii_text = file_get_contents("./tscii.sample1.txt");
$utf8Text = TSCII::convertToUnicode($tscii_text);
file_put_contents("utf8.text",$utf8Text);