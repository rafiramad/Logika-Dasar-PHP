<!-- munculkan  text dengan tag heading size berbeda sebanyak 5 jenis menggunakan looping php -->

<?php
for ($i = 1; $i <= 5; $i++) {
    $hasil = 'h' . $i;
    echo "<$hasil> Heading $i";
}
?>