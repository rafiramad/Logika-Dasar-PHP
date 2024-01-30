<!-- 1. Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten 
(lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). Lalu tampilkan 
berdasarkan kelompok tersebut.
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66]; -->

<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belumKompeten = [];


foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Nilai Kompeten: ";
foreach ($kompeten as $nilai) {
    echo $nilai. ",";
}

echo "<br>";
echo "Nilai Belum Kompeten: ";
foreach ($belumKompeten as $nilai) {
    echo $nilai. ",";
}

?>