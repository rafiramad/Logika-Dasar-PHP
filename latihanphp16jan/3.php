<?php

$totalbelanja = 100000;

if ($totalbelanja > 100000) {
    $potongan = 10000;
    echo "Andi mendapatkan potongan harga 10.000 karena total belanja lebih dari 100.000.";
} else {
    $potongan = 0;
    echo "Andi tidak mendapatkan potongan harga, karena total tidak sampai 100.000";
}

echo "\nTotal belanja Andi: " . $totalbelanja;
echo "\nVoucher potongan harga: " . $potongan;

?>
