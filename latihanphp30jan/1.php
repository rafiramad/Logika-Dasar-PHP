<?php
function filterJurusan(...$jurusan)
{
    $filteredJurusan = array_map('strtoupper', $jurusan);
    $filteredJurusan = array_unique($filteredJurusan);

    return $filteredJurusan;
}

$hasil = filterJurusan("PPLG", "HTL", "KLN", "PMN", "pplg");

echo implode(", ", $hasil);
?>
