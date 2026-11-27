<?php

declare(strict_types=1);

require_once __DIR__ . '/Siswa.php';
require_once __DIR__ . '/Kelas.php';

$kelas = new Kelas('Kelas 6A');
$kelas->tambahSiswa(new Siswa('101', 'Andi'));
$kelas->tambahSiswa(new Siswa('102', 'Siti'));

echo "=== Data Kelas ===\n";
echo "Nama Kelas   : {$kelas->nama}\n";
echo "Jumlah Siswa : {$kelas->jumlahSiswa()}\n";
echo "Daftar Siswa : " . implode(', ', $kelas->daftarNama()) . "\n";
