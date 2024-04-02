<!-- 1 den 1000 e kadar olan ve 5’e veya 7’ye kalansız bölünen sayıların
toplamını hesaplatacak php uygulamasını yazınız. -->

<?php
$toplam = 0; // Toplamı saklamak için bir değişken tanımlıyoruz.

for ($i = 1; $i <= 1000; $i++) { // 1'den 1000'e kadar döngü başlatıyoruz.
    if ($i % 5 == 0 || $i % 7 == 0) { // Eğer sayı 5'e veya 7'ye tam bölünüyorsa,
        $toplam += $i; // bu sayıyı toplama ekliyoruz.
    }
}

echo "Toplam: " . $toplam; // Toplamı ekrana yazdırıyoruz.

echo "<br>";
echo "<br>";
echo "<br>";

?>

<!-- n elemanlı bir dizinin elemanlarından 50 den küçük olanları bir diziye diğerlerini başka bir
diziye atayıp bu dizileri ekrana yazdıran php uygulamasını yazınız. -->

<?php
// Örnek bir dizi tanımlıyoruz.
$dizi = [10, 55, 23, 64, 87, 28, 91, 47, 73, 50];

// 50'den küçük ve büyük sayıları saklamak için iki boş dizi oluşturuyoruz.
$kucukler = [];
$buyukler = [];

// Dizinin elemanları üzerinde döngü kuruyoruz.
foreach ($dizi as $eleman) {
    if ($eleman < 50) {
        // Eğer eleman 50'den küçükse, kucukler dizisine ekliyoruz.
        $kucukler[] = $eleman;
    } else {
        // Eğer eleman 50'den büyük veya eşitse, buyukler dizisine ekliyoruz.
        $buyukler[] = $eleman;
    }
}

// Sonuçları ekrana yazdırıyoruz.
echo "50'den Küçük Olanlar: ";
print_r($kucukler);
echo "<br>";
echo "\n50 veya Daha Büyük Olanlar: ";
print_r($buyukler);

echo "<br>";
echo "<br>";
echo "<br>";
?>
