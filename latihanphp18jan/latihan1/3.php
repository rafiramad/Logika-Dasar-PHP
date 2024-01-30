<?php

$nasi_goreng_harga = 15000;
$ayam_bakar_harga = 20000;
$nasi_kebuli_harga = 25000;
$aneka_jus_harga = 8000;
$es_teh_manis_harga = 3000;
$es_jeruk_harga = 5000;

$hari_ini = "Friday"; 

$total_harga = ($nasi_goreng_harga * 2) + ($ayam_bakar_harga * 1) + ($nasi_kebuli_harga * 2);


if ($hari_ini == "Friday") {
    $diskon = 0.05;
} elseif ($hari_ini == "Monday") {
    $diskon = 0.02;
} else {
    $diskon = 0;
}

$total_harga_diskon = $total_harga - ($total_harga * $diskon);

echo "hari : $hari_ini";
echo "Total harga : $total_harga <br>";
echo "Diskon yang diterapkan: " . ($diskon * 100) . "%<br>";
echo "Total harga setelah diskon: $total_harga_diskon";

?>