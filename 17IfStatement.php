<?php

// - IF Statements
// 1. Dalam PHP if adalah salah satu kata kunci yang digunakan untuk percabangan
// 2. Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi sudah terpenuhi
// 3. Hampir di semua bahasa pemrograman mendukung if expression

// - Syntax IF
// if (expression) 
//     # statement;

// if (expression) {
//     # statement;
//     # statement;
//     # statement;
// }

// - Contoh Kode IF Statement
// $nilai = 80;
// $absen = 90;

// if ($nilai >= 75 && $absen >= 75) {
//     echo "Selamat anda lulus!" . PHP_EOL;
// }

// =============================================================================================

// - Else Statement
// 1. Blok if akan dieksekuis ketika kondisi if bernilai true
// 2. Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
// 3. Hal ini bisa dilakukan menggunakan else statements

// - Syntax Else Statements
// if (expression) 
//     # statement;
// else
//     # statement;

// if (expression) {
//     # statement;
//     # statement;
//     # statement;
// } else {
//     # statement;
// }

// $nilai = 70;
// $absen = 90;

// if ($nilai >= 75 && $absen >= 75) {
//     echo "Selamat anda lulus!" . PHP_EOL;
// } else {
//     echo "Maaf, anda tidak lulus!" . PHP_EOL;
// }

// =============================================================================================

// Else If Statement
// 1. Kadang didalam if, kita butuh memebuat beberapa kondisi
// 2. Kasus seperti ini, di PHP kita bisa menggunakan else if statements
// 3. Else if di PHP bisa lebih dari itu
// 4. Kode else if di php bisa menggunakan "else if" atau "elseif" (digabung)

// Syntax Else If Statement
// if (expression) {
//     # statement;
//     # statement;
//     # statement;
// } else if (expression) {
//     # statement;
// } else {
//     # statement;
// }

// if (expression) {
//     # statement;
//     # statement;
//     # statement;
// } else if (expression) {
//     # statement;
//     # statement;
// } else if (expression) {
//     # statement;
//     # statement;
// } else {
//     # statement;
// }

// $nilai = 55;
// $absen = 90;

// if ($nilai >= 80 && $absen >= 80) {
//     echo "Selamat anda mendapat nilai A" . PHP_EOL;
// } else if ($nilai >= 70 && $absen >= 70) {
//     echo "Selamat anda mendapat nilai B" . PHP_EOL;
// } else if ($nilai >= 60 && $absen >= 60) {
//     echo "Selamat anda mendapat nilai C" . PHP_EOL;
// } else if ($nilai >= 50 && $absen >= 50) {
//     echo "Selamat anda mendapat nilai D" . PHP_EOL;
// } else {
//     echo "Selamat anda mendapat nilai E" . PHP_EOL;
// }

// ==============================================================================================

// Syntax Alternatif
// 1. Selain menggunakan "{}" (Kurung Kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu menggunakan ":" (titik dua)
// 2. Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement

// $nilai = 55;
// $absen = 90;

// if ($nilai >= 80 && $absen >= 80) :
//     echo "Selamat anda mendapat nilai A" . PHP_EOL;
// elseif ($nilai >= 70 && $absen >= 70)  :
//     echo "Selamat anda mendapat nilai B" . PHP_EOL;
// elseif ($nilai >= 60 && $absen >= 60) :
//     echo "Selamat anda mendapat nilai C" . PHP_EOL;
// elseif ($nilai >= 50 && $absen >= 50) :
//     echo "Selamat anda mendapat nilai D" . PHP_EOL;
// else :
//     echo "Selamat anda mendapat nilai E" . PHP_EOL;
// endif;