<?php

namespace Core\Helpers;

function truncate ( string $string, int $max_length = 150):string {
    if (strlen($string) > $max_length) :
        $string = substr($string, 0, $max_length);
        $last_space = strrpos($string, " ");
        return substr($string, 0, $last_space) . "...";
    endif;
    return $string;
}

function slugify(string $text): string {
    // Strip html tags
    $text=strip_tags($text);
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    // Check if it is empty
    if (empty($text)) { return 'n-a'; }
    // Return result
    return $text;
}