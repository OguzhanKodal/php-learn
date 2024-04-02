<?php

    $sayi1 = 10;
    $sayi2 = 20;

    //aritmetik işlemler
    echo "sonuç: ".($sayi1+$sayi2)."<br>";
    echo "sonuç: ".($sayi1-$sayi2)."<br>";
    echo "sonuç: ".($sayi1*$sayi2)."<br>";
    echo "sonuç: ".($sayi1/$sayi2)."<br>"; // bölüm sonucu float olarak döner
    echo "sonuç: ".($sayi1%$sayi2)."<br>"; // mod alınan sonucu int olarak döner
    echo "sonuç: ".($sayi1**$sayi2)."<br>"; // üs alma işlemi
    echo "sonuç: ".($sayi1<$sayi2)."<br>"; // true
    echo "sonuç: ".++$sayi1."<br>"; // 11

    //atama işlemleri
    $sayi1 = $sayi1 + $sayi2; // 30 
    $sayi1 += $sayi2; // 50

    //karşılaştırma işlemleri
    echo "sonuç: ".($sayi1==$sayi2)."<br>"; // false
    echo "sonuç: ".($sayi1!=$sayi2)."<br>"; // true , != eşit değil anlamına gelir.
    echo var_dump($sayi1==$sayi2); // false var_dump ile tipini de kontrol edebiliriz.

    //mantıksal işlemler

    $age = 20;
    $mezuniyet = "ilkokul";

    $sonuc = ($age >= 18 and $mezuniyet == "lise");
    $sonuc2 = ($age >= 18 or $mezuniyet == "lise");

    echo var_dump($sonuc)."<br>"; //
    echo var_dump($sonuc2); //
?>