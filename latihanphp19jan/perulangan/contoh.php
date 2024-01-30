<?php

// dari array tersebut hitunglah jumlah rata rata dari nilai tiap tiap siswa.
//lalu tampilkan seperti berikut : // 1. andi 2. :81.2
$student = [
    [
        "nama"=> "andi",
        "nilai" => [100, 100, 80, 90, 80],
    ],
    [
        "nama"=> "yudi",
        "nilai" => [80, 90, 80, 70, 80],
    ],
    [
        "nama"=> "budi",
        "nilai" => [60, 60, 50, 70, 80],
    ],
];

echo "<ol>";
foreach ($student as $key=>$value){
        echo "<li>".$value['nama'] . " = ".(array_sum($value['nilai']) / (count($value['nilai']))) . "</li>";
}

echo"</ol>";

?>