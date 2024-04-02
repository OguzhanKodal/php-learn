<?php

    $urunadi = "iphone16";
    $fiyat = "3000";
    $kdvorani = 1.2;

    $sonuc = $urunadi." isimli ürünün fiyatı: ".$fiyat." TL'dir. KDV dahil fiyatı: ".($fiyat*$kdvorani)." TL'dir.";

    //alternatif yazım şekli
    $sonuc2 = "$urunadi isimli ürünün fiyatı: $fiyat TL'dir. KDV dahil fiyatı: ".($fiyat*$kdvorani)." TL'dir.";
    
    echo $sonuc;
    echo "<br>";
    echo $sonuc2;

    //array
    echo "<br>";
    echo $sonuc[0]; // i harfini çıktı verir.

    echo "<br>";
    echo $sonuc[1]."<br>"; // p harfini çıktı verir.

    // string fonksiyonları
    
    echo strlen($sonuc)."<br>"; // string uzunluğunu verir.

    echo str_word_count($sonuc)."<br>"; // kelime sayısını verir.

    echo strtolower($sonuc)."<br>"; // stringi küçük harf yapar.

    echo strtoupper($sonuc)."<br>"; // stringi büyük harf yapar.

    //w3schools.com da php string functions aratılarak daha fazla fonksiyon öğrenilebilir.

    
?>

