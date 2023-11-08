<?php
// soal 2
$input = "kodebarg = 100, nmbrng= jambu, hrg=850, qty=2, totalbayar=1000";

// // Menggunakan preg_split untuk memisahkan input berdasarkan tanda koma dan spasi
$pieces = preg_split('/,\s*/', $input);

// // Memisahkan setiap potongan data berdasarkan tanda sama dengan
$data = [];
foreach ($pieces as $piece) {
    list($key, $value) = explode('=', $piece);
    $data[trim($key)] = trim($value);
}

// Loop melalui elemen-elemen array dan tampilkan pasangan "key" dan "value"
foreach ($data as $key => $value) {
    echo "$" . "$key =  $value\n";
}
