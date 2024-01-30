<?php 
// 4. Buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan
// bilangan yang sama antara kedua variabel.
// Dan kelompok kedua bilangan selain itu (yang tidak sama / yang hanya 
// terdapat disalah satu variabel saja)
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$nyariSama = array_intersect($bil1,$bil2);


$nyariBeda2 = array_diff($bil1,$bil2);

echo "Kelompok bilangan yang sama : ";
foreach ($nyariSama as $sama) {
    echo $sama . " ";
}
echo "<br>";

echo "kelompok bilangan yang berbeda: ";
foreach ($nyariBeda2 as $beda) {
    echo $beda. " ";
}
