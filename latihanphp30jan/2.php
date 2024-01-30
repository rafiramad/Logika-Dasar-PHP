<?php

function hitungLembarUang($nominal) {
    $lembarUang = array(
        100000, 50000, 20000, 10000, 5000, 2000, 1000, 500
    );

    foreach ($lembarUang as $uang) {
        $jumlah = (int)($nominal / $uang);

        if ($jumlah > 0) {
            echo "Rp.$uang : $jumlah <br>";
            $nominal %= $uang;
        }
    }
}


$nominalInput = 140500;

echo "Nominal : Rp. $nominalInput";
echo '<br>';
echo "Jumlah lembar uang : <br>";
hitungLembarUang($nominalInput);

?>