<?php

// Ternary Operator
// 1. Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statemen. lalu jika benar kita ingin memeberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y.
// 2. Penggunaan if statement pada kasus seperti ini bisa dipersingkat menggunakan ternary operator.
// 3. Ternary operator menggunakan kata kunci "?" dan ":"

// Sintaks Ternary Operator
// (kondisi) ? 'value jika kondisi benar' : 'value jika kondisi salah';

// Jika menggunakan IF STATEMENTS
// $gender = "PRIA";
// $hi = null;

// if ($gender == "PRIA") {
//     $hi = "Hi Bro!";
// } else {
//     $hi = "Hi Nona!";
// }

// echo $hi . PHP_EOL;

// Menggunakan Ternary Operator
$gender = "WANITA";
$hi = ($gender == "PRIA") ? 'Hi Bro!' : 'Hi Nona!';
echo $hi . PHP_EOL;

// $nilai = 50;
// $hasil = ($nilai >= 90) ? 'Anda Mendapat Nilai A' : ($nilai >= 80 ? 'Anda Mendapat Nilai B' : ($nilai >= 70 ? 'Anda Mendapat Nilai C' : 'Jelek Nilaimu'));
// echo $hasil . PHP_EOL;