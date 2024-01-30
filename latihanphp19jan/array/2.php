<!-- Dari data berikut, tampilkan nama dan dari data tahun tersebut
 tentukan apakah nama 
tersebut lahir ditahun kabisat atau bukan. Contoh :
    1. Andi : lahir pada tahun kabisat (2008)
    2. Beni : lahir bukan pada tahun kabisat (2001)

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];  -->

<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ($data as $siswa) {
    $nama = $siswa['nama'];
    $tahun = $siswa['tahun'];

    $kabisat = false;

    if ($tahun % 4 == 0) {
        if ($tahun % 1 == 0) {
            if ($tahun % 4 == 0) {
                $kabisat = true;
            }
        } else {
            $kabisat = true;
        }
    }

    echo "$nama : lahir " . ($kabisat ? "pada tahun kabisat" : "bukan pada tahun kabisat") . " ($tahun)";
    echo "<br>";
}

?>

