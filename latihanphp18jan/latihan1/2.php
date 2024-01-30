<?php
$berat = 80;
$tb = 148;

$tb_meter = $tb / 100;

$imt = $berat / ($tb_meter * $tb_meter);

if ($imt < 18.5) {
    $kategori = "Berat badan kurang";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    $kategori = "Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    $kategori = "Berat badan lebih";
} else {
    $kategori = "Obesitas";
}

$hasil_imt = substr($imt, 0, 5);

echo "imt : " . $hasil_imt; 
echo "<br>";
echo "$kategori";
?>
