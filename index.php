<?php

require_once 'Mahasiswa.php';
require_once 'Produk.php';

$mahasiswa1 = new Mahasiswa(
    "241001",
    "Andi",
    "Pendidikan Teknologi Informasi",
    3.80
);

$mahasiswa2 = new Mahasiswa(
    "241002",
    "Budi",
    "Pendidikan Teknologi Informasi",
    3.40
);

$mahasiswa3 = new Mahasiswa(
    "241003",
    "Citra",
    "Pendidikan Teknologi Informasi",
    2.90
);

$daftarMahasiswa = [
    $mahasiswa1,
    $mahasiswa2,
    $mahasiswa3
];

echo "<h1>Data Mahasiswa</h1>";

foreach ($daftarMahasiswa as $mahasiswa) {
    echo $mahasiswa->info();
    echo "<br>Predikat: " . $mahasiswa->predikat();
    echo "<hr>";
}

$produk = new Produk("Laptop", 5000000, 2);

echo "<h2>Data Produk</h2>";
echo "Total Nilai Stok: Rp"
    . number_format($produk->totalNilai(), 0, ',', '.');