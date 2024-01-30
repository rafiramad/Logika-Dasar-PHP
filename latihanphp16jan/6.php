<!-- Rumah makan beni mengadakan program diskon sebesar 5% tiap pembelian hari selasa dan
setiap pembelian diatas 100000 mendapat diskon sebesar 7%
hitunglah uang yang harus dibayar jika total pembelian 130000 dihari ini
buatkan program php -->
<?php

$diskon1 = 0.05;
$diskon2 = 0.07;
$diskon3 = 0.12;
$minimumDiskon = 100000;
$totalBelanja = 130000;
$hariBelanja = "sasa";

// Inisialisasi diskon awal
$diskon = 0;

if ($hariBelanja == "selasa") {
    // Memeriksa apakah belanja di atas 100 ribu untuk diskon 5%
    if ($totalBelanja > $minimumDiskon) {
        $diskon += $diskon3;
        $jlmdiskon3 = $totalBelanja * $diskon3;
        $ttldis3 = $totalBelanja - $jlmdiskon3;
        echo "Hari Selasa, belanja di atas 100 ribu, dapat diskon 12%. Harga menjadi " . $ttldis3;
    } else {
        $jlmdiskon2 = $totalBelanja * $diskon2;
        $ttldis2 = $totalBelanja - $jlmdiskon2;
        $diskon += $diskon2;
        echo "Hari Selasa, dapat diskon 7%. Harga menjadi " . $ttldis2;
    }
} elseif ($totalBelanja > $minimumDiskon) {
    // Jika bukan hari Selasa, tapi belanja di atas 100 ribu, dapat diskon 7%
    $diskon += $diskon2;
    echo "Bukan hari Selasa, belanja di atas 100 ribu, dapat diskon 7%.";
}

// Hitung total diskon
$totalDiskon = $totalBelanja * $diskon;

// Hitung harga akhir setelah diskon
$hargaAkhir = $totalBelanja - $totalDiskon;

echo "<br>";
echo "Total diskon: " . ($diskon * 100) . "%";
echo "<br>";
echo "Harga akhir nya: " .$hargaAkhir;
?>
