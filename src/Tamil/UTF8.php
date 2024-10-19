<?php

/*
* This PHP file uses the following encoding : utf-8
* (C) 2024 Hariharan Umapathi <smarthariharan28@gmail.com>
* Licensed under MIT
*/

namespace Tamil;

use IntlChar;
use Exception;

ini_set("display_errors", 1);
error_reporting(E_ALL);

class UTF8
{
    public const ASCII_LETTERS = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
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
    public const VOWEL_oo = "ஓ";
    public const VOWEL_AU = "ஔ";
    public const UYIR_LETTERS = ["அ", "ஆ", "இ", "ஈ", "உ", "ஊ", "எ", "ஏ", "ஐ", "ஒ", "ஓ", "ஔ"];

    # List of letters you can use


    public const AYTHAM_LETTER = "ஃ";
    public const AYUDHA_LETTER = self::AYTHAM_LETTER;

    public const KURIL_LETTERS = ["அ", "இ", "உ", "எ", "ஒ"];
    public const NEDIL_LETTERS = ["ஆ", "ஈ", "ஊ", "ஏ", "ஓ", "ஐ", "ஔ"];
    public const DIPTHONG_LETTERS = ["ஐ", "ஔ"];

    public const PRONOUN_LETTERS = ["அ", "இ", "உ"];
    public const SUTTEZHUTHTHU = self::PRONOUN_LETTERS;

    public const VALLINAM_LETTERS  = ["க்", "ச்", "ட்", "த்", "ப்", "ற்"];
    public const MELLINAM_LETTERS  = ["ங்", "ஞ்", "ண்", "ந்", "ம்", "ன்"];
    public const IDAYINAM_LETTERS  = ["ய்", "ர்", "ல்", "வ்", "ழ்", "ள்"];
    public const MEI_LETTERS = [
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

    public const ACCENT_SYMBOLS = [
        "", "ா", "ி", "ீ", "ு", "ூ", "ெ", "ே", "ை", "ொ", "ோ", "ௌ", "ஃ"
    ];

    public const ACCENT_AA = self::ACCENT_SYMBOLS[1];
    public const ACCENT_I =  self::ACCENT_SYMBOLS[2];
    public const ACCENT_U = self::ACCENT_SYMBOLS[3];
    public const ACCENT_UU = self::ACCENT_SYMBOLS[4];
    public const ACCENT_E = self::ACCENT_SYMBOLS[5];
    public const ACCENT_EE = self::ACCENT_SYMBOLS[6];
    public const ACCENT_AI = self::ACCENT_SYMBOLS[7];
    public const ACCENT_O = self::ACCENT_SYMBOLS[8];
    public const ACCENT_OO = self::ACCENT_SYMBOLS[9];
    public const ACCENT_AU = self::ACCENT_SYMBOLS[10];

    public const PULLI_SYMBOLS = ["்"];

    public const AGARAM_LETTERS = [
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
    public const MAYANGOLI_LETTERS = ["ண", "ன", "ந", "ல", "ழ", "ள", "ர", "ற"];
    public const CONSONANT_KA = "க";
    public const CONSONANT_NGA = "ங";
    public const CONSONANT_CA = "ச";
    public const CONSONANT_JA = "ஜ";
    public const CONSONANT_NYA = "ஞ";
    public const CONSONANT_TTA = "ட";
    public const CONSONANT_NNA = "ண";
    public const CONSONANT_NNNA = "ன";
    public const CONSONANT_TA = "த";
    public const CONSONANT_THA = "த";
    public const CONSONANT_NA = "ந";
    public const CONSONANT_PA = "ப";
    public const CONSONANT_MA = "ம";
    public const CONSONANT_YA = "ய";
    public const CONSONANT_RA = "ர";
    public const CONSONANT_RRA = "ற";
    public const CONSONANT_LA = "ல";
    public const CONSONANT_LLA = "ள";
    public const CONSONANT_LLLA = "ழ";
    public const CONSONANT_ZHA = "ழ";
    public const CONSONANT_VA = "வ";

    public const SANSKRIT_LETTERS = ["ஶ", "ஜ", "ஷ", "ஸ", "ஹ", "க்ஷ"];
    public const SANSKRIT_MEI_LETTERS = ["ஶ்", "ஜ்", "ஷ்", "ஸ்", "ஹ்", "க்ஷ்"];

    public const UYIRMEI_LETTERS = [
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
    public const TAMIL_DIGIT_1TO10 = ["௦", "௧", "௨", "௩", "௪", "௫", "௬", "௭", "௮", "௯", "௰"];
    public const TAMIL_DIGIT_100 = "௱";
    public const TAMIL_DIGIT_1000 = "௲";

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
    public const TAMIL_SYMBOLS = [
       self::_day,
       self::_month,
       self::_year,
       self::_debit,
       self::_credit,
       self::_rupee,
       self::_numeral,
       self::_sri,
       self::_ksha,
       self::_ksh,
       self::_indian_rupee,
    ];

    ## total tamil letters in use, including sanskrit letters
    public const TAMIL_LETTERS = [
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
    public const  VANTRODAR_UGARAM = ["கு", "சு", "டு", "து", "பு", "று"]; //வன்றொடர் உகரம்
    public const UYIR_MEI_KURIL = [
        "க",
        "கி",
        "கு",
        "கெ",
        "கொ",
        "கௌ",
        "ச",
        "சி",
        "சு",
        "செ",
        "சொ",
        "சௌ",
        "ட",
        "டி",
        "டு",
        "டெ",
        "டொ",
        "டௌ",
        "த",
        "தி",
        "து",
        "தெ",
        "தொ",
        "தௌ",
        "ப",
        "பி",
        "பு",
        "பெ",
        "பொ",
        "பௌ",
        "ற",
        "றி",
        "று",
        "றெ",
        "றொ",
        "றௌ",
        "ஞ",
        "ஞி",
        "ஞு",
        "ஞெ",
        "ஞொ",
        "ஞௌ",
        "ங",
        "ஙி",
        "ஙு",
        "ஙெ",
        "ஙொ",
        "ஙௌ",
        "ண",
        "ணி",
        "ணு",
        "ணெ",
        "ணொ",
        "ணௌ",
        "ந",
        "நி",
        "நு",
        "நெ",
        "நொ",
        "நௌ",
        "ம",
        "மி",
        "மு",
        "மெ",
        "மொ",
        "மௌ",
        "ன",
        "னி",
        "னு",
        "னெ",
        "னொ",
        "னௌ",
        "ய",
        "யி",
        "யு",
        "யெ",
        "யொ",
        "யௌ",
        "ர",
        "ரி",
        "ரு",
        "ரெ",
        "ரொ",
        "ரௌ",
        "ல",
        "லி",
        "லு",
        "லெ",
        "லொ",
        "லௌ",
        "வ",
        "வி",
        "வு",
        "வெ",
        "வொ",
        "வௌ",
        "ழ",
        "ழி",
        "ழு",
        "ழெ",
        "ழொ",
        "ழௌ",
        "ள",
        "ளி",
        "ளு",
        "ளெ",
        "ளொ",
        "ளௌ",
    ];

    public const UYIR_MEI_NEDIL = [
        "கா",
        "கீ",
        "கூ",
        "கே",
        "கோ",
        "சா",
        "சீ",
        "சூ",
        "சே",
        "சோ",
        "டா",
        "டீ",
        "டூ",
        "டே",
        "டோ",
        "தா",
        "தீ",
        "தூ",
        "தே",
        "தோ",
        "பா",
        "பீ",
        "பூ",
        "பே",
        "போ",
        "றா",
        "றீ",
        "றூ",
        "றே",
        "றோ",
        "ஞா",
        "ஞீ",
        "ஞூ",
        "ஞே",
        "ஞோ",
        "ஙா",
        "ஙீ",
        "ஙூ",
        "ஙே",
        "ஙோ",
        "ணா",
        "ணீ",
        "ணூ",
        "ணே",
        "ணோ",
        "நா",
        "நீ",
        "நூ",
        "நே",
        "நோ",
        "மா",
        "மீ",
        "மூ",
        "மே",
        "மோ",
        "னா",
        "னீ",
        "னூ",
        "னே",
        "னோ",
        "யா",
        "யீ",
        "யூ",
        "யே",
        "யோ",
        "ரா",
        "ரீ",
        "ரூ",
        "ரே",
        "ரோ",
        "லா",
        "லீ",
        "லூ",
        "லே",
        "லோ",
        "வா",
        "வீ",
        "வூ",
        "வே",
        "வோ",
        "ழா",
        "ழீ",
        "ழூ",
        "ழே",
        "ழோ",
        "ளா",
        "ளீ",
        "ளூ",
        "ளே",
        "ளோ",
    ];

    final public static function getUyirLetters()
    {
        return  ["அ", "ஆ", "இ", "ஈ", "உ", "ஊ", "எ", "ஏ", "ஐ", "ஒ", "ஓ", "ஔ"];
    }
    public static function getGrandhaMeiLetters()
    {
        return array_merge(self::MEI_LETTERS, self::sanskrit_mei_letters);
    }
    public static function getGranthaAgaramLetters()
    {
        return array_merge(self::AGARAM_LETTERS, self::SANSKRIT_LETTERS);
    }

    public static function getGranthaUyirmeiLetters()
    {
        $start = array_search(self::tamil_letters, "கா") - 1;

        return array_slice(self::tamil_letters, $start);
    }
    public static function getTamil247()
    {
        return array_merge([], [], self::uyir_letters, self::mei_letters, self::uyirmei_letters);
    }

    public static function getTamilDigits()
    {
        return array_merge(self::tamil_digit_1to10, [self::tamil_digit_100], [self::tamil_digit_1000]);
    }



    // length of the definitions
    public function getAccentLen()
    {
        return self::TA_ACCENT_LEN; //13 = 12 + 1
    }
    public function getAyudhaLen()
    {
        return self::TA_AYUDHA_LEN;
    }
    public static function getUyirLen()
    {
        return self::TA_UYIR_LEN;
    }
    public static function getMeiLen()
    {
        return self::TA_MEI_LEN;
    }
    public function getAgaramLen()
    {
        return self::TA_AGARAM_LEN;
    }
    public function getUyirmeiLen()
    {
        return self::TA_UYIRMEI_LEN;
    }
    public static function getTamilLen()
    {
        return count(self::TAMIL_LETTERS);
    }

    //Access the Letters
    public function uyir($index)
    {
        if ($index >= 0 && $index < self::getUyirLen()) {
            return self::UYIR_LETTERS[$index];
        }
    }

    public function agaram($index)
    {
        if ($index >= 0 && $index < self::getAgaramLen()) {
            return self::AGARAM_LETTERS[$index];
        }
    }
    public function mei($index)
    {
        if ($index >= 0 && $index < self::getMeiLen()) {
            return self::MEI_LETTERS[$index];
        }
    }
    public function uyirmei($index)
    {
        if ($index >= 0 && $index < self::getUyirmeiLen()) {
            return self::UYIRMEI_LETTERS[$index];
        }
    }

    //Utility functions
    /*
    * construct uyirmei letter give mei index and uyir index
    */
    public static function uyirmeiConstructed($mei_idx, $uyir_idx)
    {
        if ($uyir_idx >= 0 && $uyir_idx < self::getUyirLen()) {
            if ($mei_idx >= 0 && $mei_idx < 6 + self::getMeiLen()) {
                return self::grandhaAgaramLetters()[$mei_idx].self::ACCENT_SYMBOLS[$uyir_idx];
            }
        }


    }
    public static function meiToAgaram($in_syllable)
    {
        $grandhamei = self::getGrandhameiLetters();
        if (array_search($in_syllable, $grandhamei) != -1) {

            $mei_pos = array_search($in_syllable, $grandhamei);
            $agaram_a_pos = 0;
            $syllable = self::uyirmeiConstructed($mei_pos, $agaram_a_pos);
            return $syllable;
        }
        return $in_syllable;


    }
    public static function tamil($index)
    {
        if ($index >= 0 && $index < self::getTamilLen()) {
            return self::TAMIL_LETTERS[$index];
        }
    }
    //Companion function to tamil
    public static function getidx($letter)
    {
        foreach (range(0, self::getTamilLen()) as $index) {
            if (self::TAMIL_LETTERS[$index] === $letter) {
                return $index;
            }

        }
        throw new Exception("Cannot find letter in Tamil arichuvadi");
    }

    public static function getTamilSymbols()
    {
        return self::TAMIL_SYMBOLS;
    }

    public static function tamil_sorted($array_data, $key)
    {
        //Implement
    }
    //Convertors
    public static function toUnicodeRepr($letters)
    {

        $codePoints = [];
        for ($i = 0; $i < mb_strlen($letters, 'UTF-8'); $i++) {
            // Get the character at the current position
            $char = mb_substr($letters, $i, 1, 'UTF-8');
            // Get the Unicode code point of the character
            echo $char;
            $codePoint = mb_ord($char, 'UTF-8');
            // Format it as a Unicode escape sequence
            $codePoints[] = sprintf('\\u%04x', $codePoint);
        }
        return "u'".implode("", $codePoints)."'";

    }
    public static function getGLL()
    {
        return array_merge(self::UYIR_LETTERS, [self::AYUDHA_LETTER], self::getGranthaAgaramLetters());
    }
    public static function isTamilUnicodeValue($letter)
    {
        return true;
    }
    public static function getLetters($word_input)
    {
        /*Splits the @word into a character-list of tamil/english
    characters present in the stream. This routine provides a robust tokenizer
    for Tamil unicode letters.*/
        $ta_letters = [];
        $not_empty = false;

        foreach (mb_str_split($word_input) as $letter) {
            if (in_array($letter, self::getGLL())) {
                $ta_letters[] = $letter;
                $not_empty = true;
                continue;
            }

            if (in_array($letter, self::ACCENT_SYMBOLS)) {

                if (!$not_empty) {
                    $ta_letters[] = $letter;
                    $not_empty = true;
                } else {
                    $ta_letters[\array_key_last($ta_letters)] .= $letter;
                }
                continue;
            }
            $char_val = mb_ord($letter);
            if ($char_val < 256 || !self::isTamilUnicodeValue($letter)) {
                $ta_letter[] = $letter;
                continue;
            }


            if ($not_empty) {
                $ta_letters[\array_key_last($ta_letters)] .= $letter;
            } else {
                $ta_letters[] = $letter;
                $not_empty = true;
            }


        }
        return $ta_letters;
    }
    public static function allTamil($word_input)
    {
        $length = strlen($word_input);
        $tamil_letters = [];
        $ta_letter_count = 0;
        if (is_string($word_input)) {
            $letter_array = mb_str_split($word_input);
        }

        if (is_array($word_input)) {

        } else {
            foreach ($letter_array as $letter) {

                echo $letter;
                if (in_array($letter, self::TAMIL_LETTERS)) {
                    $ta_letter_count++;
                }
            }
        }
        echo "TA LETTER COUNT : ".$ta_letter_count;
        echo "LETTER ARRAY: ".count($letter_array);
        print_r($letter_array);
        return $ta_letter_count === count($letter_array);

    }
    public static function __all_symbols()
    {
        return array_merge(self::ACCENT_SYMBOLS, self::PULLI_SYMBOLS);
    }
    public static function cmp($x, $y)
    {
        return strcmp($x, $y);
    }
    /*
    * input word was string or array sequence
    * return true if word_input has any English letters in the string
    */
    public static function getAsciiLetters()
    {
        return mb_str_split(self::ASCII_LETTERS);
    }
    public static function hasEnglish($word_input)
    {
        $letters = self::getAsciiLetters();
        $count = 0;
        for ($i = 0;$i < strlen($word_input);$i++) {
            if (array_search($word_input[$i], $letters) >= -1) {
                $count++;
            }
        }
        return $count > 0 ? true : false;
        if (strlen($word_input) > 0) {
            return false;
        }
    }
    public static function hasTamil($word_input)
    {
        $word_input = mb_str_split($word_input);
        foreach (self::TAMIL_LETTERS as $letter) {
            if (array_search($letter, $word_input) > 0) {
                return true;
            }
        }
        return false;
    }

    public static function isTamil($letter)
    {
        return in_array($letter, self::TAMIL_LETTERS);
    }
    public static function getWordsIterable($letters, $tamilOnly = false)
    {
        $buffer = [];
        foreach (mb_str_split($letters) as $idx => $letter) {
            echo $letter;
            if (IntlChar::isspace($letter)) {
                if (self::isTamil($letter) || !$tamilOnly) {
                    array_push($buffer, $letter);
                } elseif (count($buffer) > 0) {
                    yield "".join($buffer);
                    $buffer = [];
                }
            }


        }
        if (count($buffer) > 0) {
            yield "".join($buffer);
        }
    }
    public static function getTamilWords($letters)
    {
        if (!is_array($letters)) {
            throw new Exception("method needs to be used with array generated from ".self::class."::getLetters()");
        }

        $words = [];
        foreach (self::getWordsIterable($letters, $tamilOnly = true) as $word) {
            array_push($words, $word);
        }
        return $words;

    }
    //    public static function getLetters($word){
    //  $ta_letters = [];
    //  $not_empty= false;
    //
    //  foreach($word as $char){
    //  }
    //
    //    }
    //    public static function hex2unicode($input_data,$offset=3){
    /*
     *
     *எ.கா. 'b9abc1b95bbeba4bbebb0baebcd' = 'சுகாதாரம்'
     * எ.கா. 'b95' = அ
     */
    //  $result = [];
    //  foreach( mb_split("\\-|/",$input_data) as $s)
    //      echo $s;
    //}
    public static function isTamilUnicode($char)
    {
        // Check if the character falls within the Tamil Unicode range
        $codePoint = mb_ord($char);
        return ($codePoint >= 0x0B80 && $codePoint <= 0x0BFF);
    }
    public static function hex2unicode($ip_data, $offset = 3)
    {
        $result = [];

        // Split the input data by '-' or '/'
        $parts = preg_split("/[-\/]/", $ip_data);

        foreach ($parts as $s) {
            $unicodeString = '';

            // Process the hex string in chunks of the specified offset
            for ($i = 0; $i < strlen($s); $i += $offset) {
                $hexChunk = substr($s, $i, $offset);
                // Convert hex to integer, then to a UTF-8 character
                $unicodeString .= mb_chr(hexdec($hexChunk), 'UTF-8');
            }

            $result[] = $unicodeString;
        }

        return "".join($result);
    }
    public static function unicode2hex($ip_data, $offset = 3)
    {
        $result = '';

        // Get individual letters from the input string
        $letters = preg_split('//u', $ip_data, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($letters as $letter) {
            // Check if the letter is a Tamil Unicode character
            if (self::isTamilUnicode($letter)) {
                // Convert the character to its Unicode code point and format it
                $codePoint = unpack('H*', mb_convert_encoding($letter, 'UTF-32BE'))[1];
                $result .= preg_replace("/[0]+/", "", str_pad($codePoint, $offset, '0', STR_PAD_LEFT));
            } else {
                // Append the letter directly if it's not Tamil Unicode
                $result .= $letter;
            }
        }

        return $result;
    }

    public static function classifyLetter($letter)
    {


        /*
        Report if Tamil letter is kuril, nedil, aytham, vallinam,
        mellinam, idayinam, uyirmei or grantham letters.
        @param $letter
        @return String $type.
        */
        if (!is_string($letter)) {
            throw new \Exception(sprintf("Input'%s' must be unicode, not just string", letter));
        }

        $kinds = [
            "kuril",
          "nedil",
          "ayudham",
          "vallinam",
          "mellinam",
          "idayinam",
          "uyirmei",
          "tamil_or_grantham",
];
        if (in_array($letter, self::UYIR_LETTERS)) {
            if (in_array($letter, self::KURIL_LETTERS)) {
                return "kuril";
            } elseif (in_array($letter, self::NEDIL_LETTERS)) {
                return "nedil";
            } elseif ($letter == self::AYUDHA_LETTER) {
                return "ayudham";
            }
        }

        if (in_array($letter, self::MEI_LETTERS)) {
            if (in_array($letter, self::MELLINAM_LETTERS)) {
                return "mellinam";
            } elseif (in_array($letter, self::VALLINAM_LETTERS)) {
                return "vallinam";
            } elseif (in_array($letter, self::IDAYINAM_LETTERS)) {
                return "idayinam";
            }
        }

        if (in_array($letter, self::UYIRMEI_LETTERS)) {
            return "uyirmei";
        }
        if (in_array($letter, self::TAMIL_LETTERS)) {
            return "tamil_or_grantham";
        }
        if (IntlChar::isalpha($letter)) {
            return "english";
        } elseif (IntlChar::isdigit($letter)) {
            return "digit";
        }
        throw new Exception(sprintf("Unknown letter '%s' neither Tamil nor English or number", $letter));
    }

}    print_r(\count(UTF8::getLetters("காதாரம்")));
//echo UTF8::allTamil("காதாரம்");
//echo UTF8::classifyLetter("சு");
//echo UTF8::hex2unicode("b9abc1b95bbeba4bbebb0baebcd").PHP_EOL;
//echo UTF8::unicode2hex("").PHP_EOL;
//echo "HAS tamil : ".UTF8::hasTamil("தமிழ்").PHP_EOL;
//echo "HAS tamil : ".UTF8::hasTamil("abcd").PHP_EOL;
//echo "get_word_iterable: ";
//foreach(UTF8::getWordsIterable("") as $word){
//  echo $word;}
//  ;
//echo "GET TAMIL WORDS ".UTF8::getTamilWords(UTF8::getLetters("ABCD தமிழ் EFGH திருபுவனம் தமிழ் தினகரன் தமிழ் தமிழ் தமிழ் தமிழ்")).PHP_EOL;
//echo "_credit : ".UTF8::_mei;
//echo "__all_symbols : ".print_r(UTF8::__all_symbols(),1).PHP_EOL;
//echo "Tamil symbols : ".print_r(UTF8::getTamilSymbols(), 1).PHP_EOL;
return ;
echo "to_unicode_repr".UTF8::toUnicodeRepr("ஏகரம்").PHP_EOL;
echo "get idx : ".UTF8::getidx('a');
echo "Tamil Text".UTF8::tamil(2);
echo "Mei to Agaram : ".UTF8::meiToAgaram('ம்');
echo "Uyrimei Constructed : ".UTF8::uyirmeiConstructed(1, 0).PHP_EOL;
echo "Accent :".UTF8::getAccentLen().PHP_EOL;
echo "Ayudha :".UTF8::getAyudhaLen().PHP_EOL;
echo "Uyir   :".UTF8::getUyirLen().PHP_EOL;
echo "Mei    :".UTF8::getMeiLen().PHP_EOL;
echo "Agaram :".UTF8::getAgaramLen().PHP_EOL;
echo "UyirMei:".UTF8::getUyirmeiLen().PHP_EOL.PHP_EOL;
echo "Tamil Len : ".UTF8::getTamilLen().PHP_EOL;


echo "Access Letters : ".UTF8::uyir(0).PHP_EOL;
echo "2 : ".UTF8::agaram(0).PHP_EOL;
echo "3 : ".UTF8::mei(0).":".UTF8::mei(19).PHP_EOL;
echo "4 :".UTF8::uyirmei(147).PHP_EOL;
echo "5 :".UTF8::meiToAgaram(UTF8::mei(0));
