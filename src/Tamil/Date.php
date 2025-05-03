<?php

namespace Tamil;

class DateTimeTamil extends \DateTime
{
    public function __construct()
    {
        parent::__construct();
    }
    public const TA_WEEKDAYS_SHORT = [
        "திங்கள்",
        "செவ்வாய்",
        "புதன்",
        "வியாழன்",
        "வெள்ளி",
        "சனி",
        "ஞாயிறு",
    ];
    public const TA_WEEKDAYS_FULL = [
        "திங்கட்கிழமை",
        "செவ்வாய்க்கிழமை",
        "புதன்கிழமை",
        "வியாழக்கிழமை",
        "வெள்ளிக்கிழமை",
        "சனிக்கிழமை",
        "ஞாயிற்றுகிழமை",
    ];
    public const   TA_MONTHS = [
        "ஜனவரி",
        "பிப்ரவரி",
        "மார்ச்",
        "ஏப்ரல்",
        "மே",
        "ஜூன்",
        "ஜூலை",
        "ஆகஸ்ட்",
        "செப்டம்பர்",
        "அக்டோபர்",
        "நவம்பர்",
        "டிசம்பர்",
    ];
    public function format($date_format)
    {

        $date_format = str_replace([
            'd','D','j','l','N','S','w','z', // Day format codes in php date time
            'W',                             // Week format code in php date time
            'F','m','M','n','t',              // Month format code in php date time
            'L','o','X','x','Y','y' // Year format code in
        ], [
            parent::format('d'),
            self::TA_WEEKDAYS_SHORT[parent::format('w') - 1],
            parent::format('j'),
            self::TA_WEEKDAYS_FULL[parent::format('w') - 1],
            parent::format('N'),
            "வது",
            parent::format('w'),
            parent::format('z'),
            //Week Codes
            parent::format('W'),
            //Month Code
            self::TA_MONTHS[parent::format('n') - 1],
            parent::format('m'),
            mb_substr(self::TA_MONTHS[parent::format('m') - 1], 0, 3),
            parent::format('n'),
            parent::format('t'),
            parent::format('L'),
            parent::format('o'),
            parent::format('X'),
            parent::format('x'),
            parent::format('Y'),
            parent::format('y'),

        ], $date_format);

        return $date_format;
    }
}
