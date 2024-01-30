<!-- buatlah sebuah fungsi yang akan membandingkan dua buah string nama. lalu menampilkan jumlah karakter dari dua nama tersebut, dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya -->

<?php


function bandingkanNama($nama1, $nama2) {

    $fullnama1 = strlen($nama1);
    $fullnama2 = strlen($nama2);
    
    if ($fullnama1 > $fullnama2) {
        $lebih_banyak = $nama1;
        $selisih = $fullnama1 - $fullnama2;

    } elseif ($fullnama1 < $fullnama2) {
        $lebih_banyak = $nama2;
        $selisih = $fullnama2 - $fullnama1;

    } else {
        $lebih_banyak = "keduanya berjumlah karakter sama";
        $selisih = 0;
    }
    
    echo "Jumlah karakter $nama1 : $fullnama1";
    echo "<br>";
    echo "Jumlah karakter $nama2 : $fullnama2";
    echo "<br>";
    echo "Jumlah karakter terbanyak : $lebih_banyak";
    echo "<br>";
    echo "Selisih jumlah karakter : $selisih";
    
}
$nama1 = "rafi";
$nama2 = "rama";

bandingkanNama($nama1, $nama2); 
bandingkanNama($nama1, "fema");

?>