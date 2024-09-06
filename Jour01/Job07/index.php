<?php
function my_closest_to_zero(array $array) : int {
    $closest = $array[0];
    foreach ($array as $number) {
        if ($number < $closest || $number == $closest && $number > $closest) {
            $closest = $number;
        }
    }
    return $closest;
}
    echo my_closest_to_zero([2,-1,5,23,21,9]);
    echo my_closest_to_zero([234,-142,512,1223,451,-59]);
?>