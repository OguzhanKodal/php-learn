<?php

    //for, while, foreach

    //for
    
    for($i = 0; $i < 10; $i++){
        echo $i . "<br>";
    }

    for($i = 20; $i < 100; $i++){
        if($i % 7 == 0){
            echo $i . "<br>";
        }
    }

    $isimler = ["ahmet", "mehmet", "ali", "veli"];

    for($i = 0; $i < count($isimler); $i++){
        echo $isimler[$i] . "<br>";
    }

    // foreach : dizilerde kullanılır
    
    $urunler = [
        "urun1" => "telefon",
        "urun2" => "bilgisayar",
        "urun3" => "buzdolabi"
    ];

    foreach($urunler as $urun){
        echo $urun . "<br>";
    }

    // while
    $i = 0;
    while($i < 10){
        echo $i . "<br>";
        $i++;
    }
?>