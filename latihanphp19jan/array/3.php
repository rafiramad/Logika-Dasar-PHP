<!-- 3. Data berikut merupakan data apa-apa saja yang Andi beli pada suatu minimarket. Dari data tersebut, hitunglah total uang yang perlu Andi bayar untuk membelinya
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ], -->



<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];
$total_pembayaran = 0;

foreach ($barang as $item) {
    $nama_barang = $item['nama_barang'];
    $harga_barang = $item['harga_barang'];
    $jumlah_beli = $item['jumlah_beli'];

    $total_barang = $harga_barang * $jumlah_beli;
    $total_pembayaran += $total_barang;

    echo "Andi membeli $jumlah_beli $nama_barang seharga $total_barang ";
    echo "<br>";
}

echo "<br>";
echo "Total uang yang perlu dibayar oleh Andi: $total_pembayaran";

?>
