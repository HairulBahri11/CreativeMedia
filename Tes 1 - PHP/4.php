<?php
// soal nomor 4
$input = "saya       sangat suka koding php dan   python";
$output = preg_replace('/\s+/', ' ', $input);
echo $output;
