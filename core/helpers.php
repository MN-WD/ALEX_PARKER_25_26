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