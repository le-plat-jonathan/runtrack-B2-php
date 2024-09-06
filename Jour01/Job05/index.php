<?php
    function my_is_prime($number) : bool {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return FALSE;
            }
        }
        return TRUE;
    }
     
    echo '<br>Nombre premier de 0 à 100: ';
    for ($i = 3; $i < 100; $i++) {
        if (my_is_prime($i)) {
            echo '<pre>';
            echo $i.' '.'true';
            echo '</pre>';
        } else {
            echo '<pre>';
            echo $i.' '.'false';
            echo '</pre>';
        }
    }
?>