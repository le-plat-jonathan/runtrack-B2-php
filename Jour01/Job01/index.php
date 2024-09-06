<?php

function myStrLen($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

$haystack = "La Plateforme";
$needle = "a";

myStrLen($haystack);
echo($length);

function (string $haystack, string $needle) : int {
    $length = myStrLen($haystack);
    $count = 0;
    for( $i = 0; $i != $length ; $i++) {
        if($haystack[$i] == $needle) {
            $count++;
        };
    };
};

?>