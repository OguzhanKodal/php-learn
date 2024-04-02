<?php

    $sayi1 = 10.2;
    $sayi2 = 20;

    echo "sonuç: ".($sayi1+$sayi2)."<br>";
    echo "sonuç: ".($sayi1-$sayi2)."<br>";
    echo "sonuç: ".($sayi1*$sayi2)."<br>";
    echo "sonuç: ".($sayi1/$sayi2)."<br>";


    echo var_dump(is_int($sayi1))."<br>";
    echo var_dump(is_int($sayi2))."<br>";
    echo var_dump(is_float($sayi2))."<br>";

    echo ceil($sayi1)."<br>";
    echo floor(4.7)."<br>";

?>