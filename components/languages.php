<?php
// Detect language from the browser
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Browser languages
$languages = array(
    'af', // afrikaans.
    'ar', // arabic.
    'bg', // bulgarian.
    'ca', // catalan.
    'cs', // czech.
    'da', // danish.
    'de', // german.
    'el', // greek.
    'en', // english.
    'es', // spanish.
    'et', // estonian.
    'fa', // persian.
    'fi', // finnish.
    'fr', // french.
    'gl', // galician.
    'he', // hebrew.
    'hi', // hindi.
    'hr', // croatian.
    'hu', // hungarian.
    'id', // indonesian.
    'it', // italian.
    'ja', // japanese.
    'ko', // korean.
    'ka', // georgian.
    'lt', // lithuanian.
    'lv', // latvian.
    'ms', // malay.
    'nl', // dutch.
    'no', // norwegian.
    'pl', // polish.
    'pt', // portuguese.
    'ro', // romanian.
    'ru', // russian.
    'sk', // slovak.
    'sl', // slovenian.
    'sq', // albanian.
    'sr', // serbian.
    'sv', // swedish.
    'th', // thai.
    'tr', // turkish.
    'uk', // ukrainian.
    'zh' // chinese.
);

// Lnaguages we support
$available_languages = [
    "en"
];

$lang = in_array($lang, $available_languages) ? $lang : 'en';
