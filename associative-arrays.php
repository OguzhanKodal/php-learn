<?php

    //Associative Diziler
    //Elemanlara anahtar kelime ile erişilir.
    // key => value
    //keylerin değiştirilemesinin önüne geçilmez.

    $urunler = array(
        "iphone" => "1000",
        "samsung" => "900",
        "huawei" => "800",
        "xiaomi" => "700"
    );

    //veya 

    $urunler2 = [
        "iphone" => "1000",
        "samsung" => "900",
        "huawei" => "800",
        "xiaomi" => "700"
    ];

    //şeklinde kullanılabilir.

    echo $urunler["iphone"];
    echo "<br>";
    echo gettype($urunler)."<br>";
    echo $urunler2[1]; // hata verir. çünkü keyler sıralı değildir. yani 1. eleman yoktur. sıralı olması için numeric array kullanılmalıdır.  

    //nümeric array ve associative array bir arada kullanılabilir.
    $araba = [
        [
        "marka" => "ford",
        "fiyat" => 100000,
        "satistami" => true
        ],
        [
        "marka" => "honda",
        "fiyat" => 200000,
        "satistami" => false
        ],
        [
        "marka" => "toyota",
        "fiyat" => 300000,
        "satistami" => true
        ]
        ];

    echo $araba[0]["marka"]."<br>";
    echo $araba[1]["fiyat"]."<br>";
    echo $araba[2]["satistami"]."<br>";


?>