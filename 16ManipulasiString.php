<?php

// Manipulasi String

// 1. DOT Operator
// > Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau data lainnya)
// > Sebenarnnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita ocba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan "." (dot) untuk menambahkan string dengan kata lain

// Contoh DOT Operator
$nama = "Adrian Mulyawan";
$nilai = 100;

echo "Nama: " . $nama . PHP_EOL;
echo "Nilai: " . $nilai . PHP_EOL . PHP_EOL;

// ==============================================================================================

// 2. Konversi ke Number dan Sebaliknya
// > Kadang kita sering melakukan konversi tipe data dari string ke number (int/float) atau sebaliknya.
// > Di PHP untuk konversi cukup mudah, kita hanya perlua menggunakan tanda kurung "(tipe_data)value".
// > Tipe data untuk string adalah string, untuk number bisa menggunakan int untu integer dan float untuk floating point.

// Contoh Konvervsi ke Number
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"120.5";
var_dump($valueFloat);

// Jika datanya tidak valid maka nilainya dibuat menjadi 0
$valueSalah = (int)"salah";
var_dump($valueSalah);

echo PHP_EOL;

// ==============================================================================================

// 3. Mengakses Karakter
// > String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku "[]"
// > Sama seperti di array, index pertama dimulai dari 0
// > Jika kita mengakses index melebihi karakter di string, maka akan terjadi error

// Contoh Mengakses Karakter
$makanan = "Bakso";
echo $makanan[0] . PHP_EOL;
echo $makanan[2] . PHP_EOL;
echo $makanan[3] . PHP_EOL . PHP_EOL;
// echo $makanan[5] . PHP_EOL; Bakal error karna index elementnya hanya sampai empat

// ==============================================================================================

// 4. Variabel Parsing
// > Khusu string menggunakan Doublue Quote atau Heredoc, kita bisa menggunakan karakter $ untuk mengakses variabel
// > Ini memudahkan keika kita ingin menggabungkan string dengan variable
// > Cara penggunaanya adalah menggunakan karakter $ lalu diikuti dengan nama variabelnya

// Contoh Variable Parsing
$contoh = "Adrian Mulyawan";
echo "Hello, $contoh selamat datang kembali" . PHP_EOL . PHP_EOL;

// ==============================================================================================

// 5. Curly Brace
// > Kadang kita butuh menggabungkan variabel dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variabel parsing.
// > Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum mengugnakan variabel parsing

// Contoh Variabel Parsing
echo "Hello, {$contoh}s selamat datang kembali" . PHP_EOL;