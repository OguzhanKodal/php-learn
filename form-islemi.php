<?php
// Form gönderildiyse işleme alıyoruz.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];
    $sifreUzunlugu = intval($_POST['sifreUzunlugu']);

    // Email adresinin doğruluğunu kontrol ediyoruz.
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Rastgele şifre üretiyoruz.
        $karakterler = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $sifre = '';
        for ($i = 0; $i < $sifreUzunlugu; $i++) {
            $sifre .= $karakterler[rand(0, strlen($karakterler) - 1)];
        }

        // Kullanıcı bilgilerini ve üretilen şifreyi gösteriyoruz.
        echo "Ad: " . $ad . "<br>";
        echo "Soyad: " . $soyad . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Şifre: " . $sifre . "<br>";
    } else {
        echo "Geçersiz email adresi.";
    }
} else {
    // Form henüz gönderilmediyse formu gösteriyoruz.
?>
<form action="" method="post">
    Ad: <input type="text" name="ad"><br>
    Soyad: <input type="text" name="soyad"><br>
    Email: <input type="text" name="email"><br>
    Şifre Uzunluğu: <input type="number" name="sifreUzunlugu" min="1"><br>
    <input type="submit" value="Şifre Üret">
</form>
<?php
}
?>
