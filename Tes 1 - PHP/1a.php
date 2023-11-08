<?php
// Soal 1a
$input = "Total pembelian baju dinas sebesar Rp.757.000";

if (preg_match('/Rp\.(\d+)/', $input, $matches)) {
    $angka = number_format((int)$matches[1] * 1000, 0, ',', '.');
    echo $angka;
} else {
    echo "Tidak ada angka yang ditemukan dalam string.";
}
