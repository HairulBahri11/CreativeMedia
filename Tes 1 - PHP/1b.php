<?php
// soal 1b
$input = "Total pembelian baju dinas sebesar Rp.757.000";

if (preg_match('/Rp\.(\d+)/', $input, $matches)) {
    $angka = intval($matches[1]); // Mengambil angka dan mengonversinya ke integer
    echo $angka * 1000; // Mengalikan dengan 1000 untuk mengonversi ke rupiah
} else {
    echo "Tidak ada angka yang ditemukan dalam string.";
}
