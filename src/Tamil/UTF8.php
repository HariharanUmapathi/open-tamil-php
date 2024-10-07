<?php

namespace Tamil;

/*
*
*
*/

class UTF8
{
    //Constants Definition Part
    public const TA_ACCENT_LEN = 13;//12 + 1
    public const TA_AYUDHA_LEN = 1;
    public const TA_UYIR_LEN = 12 ;
    public const TA_MEI_LEN = 18;
    public const TA_AGARAM_LEN = 18;
    public const TA_SANSKRIT_LEN = 6;
    public const TA_UYIRMEI_LEN = 216;
    public const TA_GRANTHA_UYIRMEI_LEN = 24 * 12;
    public const TA_LETTERS_LEN = 247 + 6 * 12 + 22 + 4 - self::TA_AGARAM_LEN - 4; //323

    //Individual Vowels
    public const VOWEL_A = "அ";
    public const VOWEL_AA = "ஆ";
    public const VOWEL_I = "இ";
    public const VOWEL_II = "ஈ";
    public const VOWEL_U = "உ";
    public const VOWEL_UU = "ஊ";
    public const VOWEL_E = "எ";
    public const VOWEL_EE = "ஏ";
    public const VOWEL_AI = "ஐ";
    public const VOWEL_O = "ஒ";
    public const VOWEL_oo= "ஓ";
    public const VOWEL_AU = "ஔ";


    # List of letters you can use


    public const AYTHAM_LETTER = "ஃ";
    public const AYUDHA_LETTER = self::AYTHAM_LETTER;

    public const kuril_letters = ["அ", "இ", "உ", "எ", "ஒ"];
    public const nedil_letters = ["ஆ", "ஈ", "ஊ", "ஏ", "ஓ", "ஐ", "ஔ"];
    public const dipthong_letters = ["ஐ", "ஔ"];

    public const pronoun_letters = ["அ", "இ", "உ"];
    public const suttezhuththu = pronoun_letters;

    public const questionsuffix_letters = ["ஆ", "ஏ", "ஓ"];
    public const vinaaezhuththu = questionsuffix_letters;
    public const vallinam_letters = ["க்", "ச்", "ட்", "த்", "ப்", "ற்"];
    public const mellinam_letters = ["ங்", "ஞ்", "ண்", "ந்", "ம்", "ன்"];
    public const idayinam_letters = ["ய்", "ர்", "ல்", "வ்", "ழ்", "ள்"];
    public const mei_letters = [
        "க்",
        "ச்",
        "ட்",
        "த்",
        "ப்",
        "ற்",
        "ஞ்",
        "ங்",
        "ண்",
        "ந்",
        "ம்",
        "ன்",
        "ய்",
        "ர்",
        "ல்",
        "வ்",
        "ழ்",
        "ள்",
    ];

    public const accent_symbols = [
        "", "ா", "ி", "ீ", "ு", "ூ", "ெ", "ே", "ை", "ொ", "ோ", "ௌ", "ஃ"
    ];

    public const accent_aa = accent_symbols[1];
    public const accent_i = accent_symbols[2];
    public const accent_u = accent_symbols[3];
    public const accent_uu = accent_symbols[4];
    public const accent_e = accent_symbols[5];
    public const accent_ee = accent_symbols[6];
    public const accent_ai = accent_symbols[7];
    public const accent_o = accent_symbols[8];
    public const accent_oo = accent_symbols[9];
    public const accent_au = accent_symbols[10];

    public const pulli_symbols = ["்"];

    public const agaram_letters = [
        "க",
        "ச",
        "ட",
        "த",
        "ப",
        "ற",
        "ஞ",
        "ங",
        "ண",
        "ந",
        "ம",
        "ன",
        "ய",
        "ர",
        "ல",
        "வ",
        "ழ",
        "ள",
    ];
    public const mayangoli_letters = ["ண", "ன", "ந", "ல", "ழ", "ள", "ர", "ற"];
    public const consonant_ka = "க";
    public const consonant_nga = "ங";
    public const consonant_ca = "ச";
    public const consonant_ja = "ஜ";
    public const consonant_nya = "ஞ";
    public const consonant_tta = "ட";
    public const consonant_nna = "ண";
    public const consonant_nnna = "ன";
    public const consonant_ta = "த";
    public const consonant_tha = "த";
    public const consonant_na = "ந";
    public const consonant_pa = "ப";
    public const consonant_ma = "ம";
    public const consonant_ya = "ய";
    public const consonant_ra = "ர";
    public const consonant_rra = "ற";
    public const consonant_la = "ல";
    public const consonant_lla = "ள";
    public const consonant_llla = "ழ";
    public const consonant_zha = "ழ";
    public const consonant_va = "வ";

    public const sanskrit_letters = ["ஶ", "ஜ", "ஷ", "ஸ", "ஹ", "க்ஷ"];
    public const sanskrit_mei_letters = ["ஶ்", "ஜ்", "ஷ்", "ஸ்", "ஹ்", "க்ஷ்"];


    //const grantha_agaram_letters =

    public const uyirmei_letters = [
        "க",
        "கா",
        "கி",
        "கீ",
        "கு",
        "கூ",
        "கெ",
        "கே",
        "கை",
        "கொ",
        "கோ",
        "கௌ",
        "ச",
        "சா",
        "சி",
        "சீ",
        "சு",
        "சூ",
        "செ",
        "சே",
        "சை",
        "சொ",
        "சோ",
        "சௌ",
        "ட",
        "டா",
        "டி",
        "டீ",
        "டு",
        "டூ",
        "டெ",
        "டே",
        "டை",
        "டொ",
        "டோ",
        "டௌ",
        "த",
        "தா",
        "தி",
        "தீ",
        "து",
        "தூ",
        "தெ",
        "தே",
        "தை",
        "தொ",
        "தோ",
        "தௌ",
        "ப",
        "பா",
        "பி",
        "பீ",
        "பு",
        "பூ",
        "பெ",
        "பே",
        "பை",
        "பொ",
        "போ",
        "பௌ",
        "ற",
        "றா",
        "றி",
        "றீ",
        "று",
        "றூ",
        "றெ",
        "றே",
        "றை",
        "றொ",
        "றோ",
        "றௌ",
        "ஞ",
        "ஞா",
        "ஞி",
        "ஞீ",
        "ஞு",
        "ஞூ",
        "ஞெ",
        "ஞே",
        "ஞை",
        "ஞொ",
        "ஞோ",
        "ஞௌ",
        "ங",
        "ஙா",
        "ஙி",
        "ஙீ",
        "ஙு",
        "ஙூ",
        "ஙெ",
        "ஙே",
        "ஙை",
        "ஙொ",
        "ஙோ",
        "ஙௌ",
        "ண",
        "ணா",
        "ணி",
        "ணீ",
        "ணு",
        "ணூ",
        "ணெ",
        "ணே",
        "ணை",
        "ணொ",
        "ணோ",
        "ணௌ",
        "ந",
        "நா",
        "நி",
        "நீ",
        "நு",
        "நூ",
        "நெ",
        "நே",
        "நை",
        "நொ",
        "நோ",
        "நௌ",
        "ம",
        "மா",
        "மி",
        "மீ",
        "மு",
        "மூ",
        "மெ",
        "மே",
        "மை",
        "மொ",
        "மோ",
        "மௌ",
        "ன",
        "னா",
        "னி",
        "னீ",
        "னு",
        "னூ",
        "னெ",
        "னே",
        "னை",
        "னொ",
        "னோ",
        "னௌ",
        "ய",
        "யா",
        "யி",
        "யீ",
        "யு",
        "யூ",
        "யெ",
        "யே",
        "யை",
        "யொ",
        "யோ",
        "யௌ",
        "ர",
        "ரா",
        "ரி",
        "ரீ",
        "ரு",
        "ரூ",
        "ரெ",
        "ரே",
        "ரை",
        "ரொ",
        "ரோ",
        "ரௌ",
        "ல",
        "லா",
        "லி",
        "லீ",
        "லு",
        "லூ",
        "லெ",
        "லே",
        "லை",
        "லொ",
        "லோ",
        "லௌ",
        "வ",
        "வா",
        "வி",
        "வீ",
        "வு",
        "வூ",
        "வெ",
        "வே",
        "வை",
        "வொ",
        "வோ",
        "வௌ",
        "ழ",
        "ழா",
        "ழி",
        "ழீ",
        "ழு",
        "ழூ",
        "ழெ",
        "ழே",
        "ழை",
        "ழொ",
        "ழோ",
        "ழௌ",
        "ள",
        "ளா",
        "ளி",
        "ளீ",
        "ளு",
        "ளூ",
        "ளெ",
        "ளே",
        "ளை",
        "ளொ",
        "ளோ",
        "ளௌ",
    ];

    //const tamil247 =  ;


    # Ref: https://en.wikipedia.org/wiki/Tamil_numerals
    # tamil digits : Apart from the numerals (0-9), Tamil also has numerals for 10, 100 and 1000.
    public const tamil_digit_1to10 = ["௦", "௧", "௨", "௩", "௪", "௫", "௬", "௭", "௮", "௯", "௰"];
    public const tamil_digit_100 = "௱";
    public const tamil_digit_1000 = "௲";

    //const tamil_digits =
    //[(num, digit)
    //for num, digit in zip(range(0, 11), tamil_digit_1to10)];
    //const tamil_digits.extend([(100, tamil_digit_100), (1000, tamil_digit_1000)]);

    # tamil symbols
    public const _day = "௳";
    public const _month = "௴";
    public const _year = "௵";
    public const _debit = "௶";
    public const _credit = "௷";
    public const _rupee = "௹";
    public const _numeral = "௺";

    public const _sri = "\u0bb6\u0bcd\u0bb0\u0bc0";  # SRI - ஶ்ரீ
    public const _ksha = "\u0b95\u0bcd\u0bb7";  # KSHA - க்ஷ
    public const _ksh = "\u0b95\u0bcd\u0bb7\u0bcd";  # KSH - க்ஷ்
    public const _indian_rupee = "₹";
    public const tamil_symbols = [
        _day,
        _month,
        _year,
        _debit,
        _credit,
        _rupee,
        _numeral,
        _sri,
        _ksha,
        _ksh,
        _indian_rupee,
    ];

    ## total tamil letters in use, including sanskrit letters
    public const tamil_letters = [
        ## /* Uyir */
        "அ",
        "ஆ",
        "இ",
        "ஈ",
        "உ",
        "ஊ",
        "எ",
        "ஏ",
        "ஐ",
        "ஒ",
        "ஓ",
        "ஔ",
        ##/* Ayuda Ezhuthu */
        "ஃ",
        ## /* Mei */
        "க்",
        "ச்",
        "ட்",
        "த்",
        "ப்",
        "ற்",
        "ஞ்",
        "ங்",
        "ண்",
        "ந்",
        "ம்",
        "ன்",
        "ய்",
        "ர்",
        "ல்",
        "வ்",
        "ழ்",
        "ள்",
        ## /* Agaram */
        ## "க","ச","ட","த","ப","ற","ஞ","ங","ண","ந","ம","ன","ய","ர","ல","வ","ழ","ள",
        ## /* Sanskrit (Vada Mozhi) */
        ## "ஜ","ஷ", "ஸ","ஹ",
        ##/* Sanskrit (Mei) */
        "ஜ்",
        "ஷ்",
        "ஸ்",
        "ஹ்",
        ## /* Uyir Mei */
        "க",
        "கா",
        "கி",
        "கீ",
        "கு",
        "கூ",
        "கெ",
        "கே",
        "கை",
        "கொ",
        "கோ",
        "கௌ",
        "ச",
        "சா",
        "சி",
        "சீ",
        "சு",
        "சூ",
        "செ",
        "சே",
        "சை",
        "சொ",
        "சோ",
        "சௌ",
        "ட",
        "டா",
        "டி",
        "டீ",
        "டு",
        "டூ",
        "டெ",
        "டே",
        "டை",
        "டொ",
        "டோ",
        "டௌ",
        "த",
        "தா",
        "தி",
        "தீ",
        "து",
        "தூ",
        "தெ",
        "தே",
        "தை",
        "தொ",
        "தோ",
        "தௌ",
        "ப",
        "பா",
        "பி",
        "பீ",
        "பு",
        "பூ",
        "பெ",
        "பே",
        "பை",
        "பொ",
        "போ",
        "பௌ",
        "ற",
        "றா",
        "றி",
        "றீ",
        "று",
        "றூ",
        "றெ",
        "றே",
        "றை",
        "றொ",
        "றோ",
        "றௌ",
        "ஞ",
        "ஞா",
        "ஞி",
        "ஞீ",
        "ஞு",
        "ஞூ",
        "ஞெ",
        "ஞே",
        "ஞை",
        "ஞொ",
        "ஞோ",
        "ஞௌ",
        "ங",
        "ஙா",
        "ஙி",
        "ஙீ",
        "ஙு",
        "ஙூ",
        "ஙெ",
        "ஙே",
        "ஙை",
        "ஙொ",
        "ஙோ",
        "ஙௌ",
        "ண",
        "ணா",
        "ணி",
        "ணீ",
        "ணு",
        "ணூ",
        "ணெ",
        "ணே",
        "ணை",
        "ணொ",
        "ணோ",
        "ணௌ",
        "ந",
        "நா",
        "நி",
        "நீ",
        "நு",
        "நூ",
        "நெ",
        "நே",
        "நை",
        "நொ",
        "நோ",
        "நௌ",
        "ம",
        "மா",
        "மி",
        "மீ",
        "மு",
        "மூ",
        "மெ",
        "மே",
        "மை",
        "மொ",
        "மோ",
        "மௌ",
        "ன",
        "னா",
        "னி",
        "னீ",
        "னு",
        "னூ",
        "னெ",
        "னே",
        "னை",
        "னொ",
        "னோ",
        "னௌ",
        "ய",
        "யா",
        "யி",
        "யீ",
        "யு",
        "யூ",
        "யெ",
        "யே",
        "யை",
        "யொ",
        "யோ",
        "யௌ",
        "ர",
        "ரா",
        "ரி",
        "ரீ",
        "ரு",
        "ரூ",
        "ரெ",
        "ரே",
        "ரை",
        "ரொ",
        "ரோ",
        "ரௌ",
        "ல",
        "லா",
        "லி",
        "லீ",
        "லு",
        "லூ",
        "லெ",
        "லே",
        "லை",
        "லொ",
        "லோ",
        "லௌ",
        "வ",
        "வா",
        "வி",
        "வீ",
        "வு",
        "வூ",
        "வெ",
        "வே",
        "வை",
        "வொ",
        "வோ",
        "வௌ",
        "ழ",
        "ழா",
        "ழி",
        "ழீ",
        "ழு",
        "ழூ",
        "ழெ",
        "ழே",
        "ழை",
        "ழொ",
        "ழோ",
        "ழௌ",
        "ள",
        "ளா",
        "ளி",
        "ளீ",
        "ளு",
        "ளூ",
        "ளெ",
        "ளே",
        "ளை",
        "ளொ",
        "ளோ",
        "ளௌ"
        ##/* Sanskrit Uyir-Mei */
        ,
        "ஶ",
        "ஶா",
        "ஶி",
        "ஶீ",
        "ஶு",
        "ஶூ",
        "ஶெ",
        "ஶே",
        "ஶை",
        "ஶொ",
        "ஶோ",
        "ஶௌ",
        "ஜ",
        "ஜா",
        "ஜி",
        "ஜீ",
        "ஜு",
        "ஜூ",
        "ஜெ",
        "ஜே",
        "ஜை",
        "ஜொ",
        "ஜோ",
        "ஜௌ",
        "ஷ",
        "ஷா",
        "ஷி",
        "ஷீ",
        "ஷு",
        "ஷூ",
        "ஷெ",
        "ஷே",
        "ஷை",
        "ஷொ",
        "ஷோ",
        "ஷௌ",
        "ஸ",
        "ஸா",
        "ஸி",
        "ஸீ",
        "ஸு",
        "ஸூ",
        "ஸெ",
        "ஸே",
        "ஸை",
        "ஸொ",
        "ஸோ",
        "ஸௌ",
        "ஹ",
        "ஹா",
        "ஹி",
        "ஹீ",
        "ஹு",
        "ஹூ",
        "ஹெ",
        "ஹே",
        "ஹை",
        "ஹொ",
        "ஹோ",
        "ஹௌ",
        "க்ஷ",
        "க்ஷா",
        "க்ஷி",
        "க்ஷீ",
        "க்ஷு",
        "க்ஷூ",
        "க்ஷெ",
        "க்ஷே",
        "க்ஷை",
        "க்ஷொ",
        "க்ஷோ",
        "க்ஷௌ",
    ];
    /*public final static getUyirLetters(self){
        return  ["அ", "ஆ", "இ", "ஈ", "உ", "ஊ", "எ", "ஏ", "ஐ", "ஒ", "ஓ", "ஔ"];
         }*/
    public static function getGrandhaMeiLetters()
    {
        return array_merge(self::mei_letters, self::sanskrit_mei_letters);
    }
    //nst grantha_mei_letters = ;
    public static function grandhaAgaramLetters()
    {
        return array_merge(self::agaram_letters, self::sanskrit_letters);
    }
    //  copy(tamil_letters[tamil_letters.index("கா") - 1:]);

    public static function getGranthaUyirmeiLetters()
    {
        $start = array_search(self::tamil_letters, "கா") - 1;

        return array_slice(self::tamil_letters, $start);
    }
    public static function getTamil247()
    {
    echo self::ayudha_letter;
        return array_merge([],[], self::uyir_letters, self::mei_letters, self::uyirmei_letters);
    }

    public static function getTamilNumbers()
    {
        return array_merge(self::tamil_digit_1to10, [self::tamil_digit_100], [self::tamil_digit_1000]);
    }

    /*
    * helpful in situations where browser/app may recognize Unicode encoding
    *    in the \u0b8e type syntax but not actual unicode glyph/code-point
    */
    public function to_unicode_repr($_letter)
    {
        return ;
    }
}

print_r(UTF8::VOWEL_A);
