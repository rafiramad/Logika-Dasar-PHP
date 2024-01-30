<?php

$angka1 = 9;
$angka2 = 2;

echo "Bilangan $angka1 Dibagi $angka2 <br>";

$hasil = $angka1 / $angka2;

echo "Hasil pembagian: " . $hasil;

if ($hasil == round($hasil)) {
    echo " (tanpa pembulatan)";
} else {
    $hasil = round($hasil);
    echo "<br>Hasil pembulatan: " . $hasil;
}
?>