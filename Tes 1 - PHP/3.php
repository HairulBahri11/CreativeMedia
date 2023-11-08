<?php
// Soal Nomor 3
$count = 0;

for ($i = 1; $i <= 100; $i++) {
    $numberAsString = (string)$i; // Ubah angka menjadi string
    $count += substr_count($numberAsString, '8');
}

echo "Angka 8 muncul sebanyak $count kali dalam rentang 1 hingga 100.";
