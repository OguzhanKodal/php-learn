<?php

    $db_user = "oguzhankodal";
    $db_pass = "1234i";

    $db_giris = ($db_user == "og<hankodal");
        
    if($db_giris){
        echo "Başarılı";
    }else{
        echo "Başarısız";
    }

    echo "<br>";
    //veya

    if($db_user == "oguzhankodal" and $db_pass == "1234i"){
        echo "Başarılı";
    }else{
        echo "Başarısız";
    }

    //elseif yapısı

    echo "<br>";

    if ($db_user != "oguzhankodal"){
        echo "Kullanıcı adı yanlış";
    }elseif ($db_pass != "1234ii"){
        echo "Parola yanlış";
    }
    else{
        echo "Kullanıcı adı ve parola doğru";
    }
?>