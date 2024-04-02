<?php

    //Diziler
    //Numeric Diziler: Elemanlara sıralı bir şekilde erişilir.
    //Associative Diziler: Elemanlara anahtar kelime ile erişilir.

    //Numeric Diziler

    $urunler = array("iphone","samsung","huawei","xiaomi");

    //veya 

    $urunler = ["iphone", "samsung", "huawei", "xiaomi"];

    //şeklinde kullanılabilir.

    echo $urunler[0];
    echo $urunler[1];
    echo "<br>";
    echo gettype($urunler);

?>