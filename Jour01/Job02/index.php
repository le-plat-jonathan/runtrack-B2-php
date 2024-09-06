<?php
function myStrLen($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

function my_str_reverse(string $string) : string {
    $length = myStrLen($string);
    $str2 = "";
    while($length > 0) {
        $length--;
        $str2 .= $string[$length];
    }
    return $str2;
};

echo my_str_reverse("hello");
?>