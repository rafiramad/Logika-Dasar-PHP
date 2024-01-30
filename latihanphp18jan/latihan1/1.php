<?php

$usia = 41;

if ($usia >= 6 && $usia <= 12) {
    $waktu = 10;
} elseif ($usia > 12 && $usia <= 18) {
    $waktu = "8-9";
} elseif ($usia > 18 && $usia <= 40) {
    $waktu = "7-8";
} else {
    $waktu = "Tidak ada rekomendasi untuk usia ini";

}

echo "$waktu";

?>

