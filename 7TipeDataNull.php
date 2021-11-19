<?php

// Tipe Data Null
// 1. Nilai NULL merepresentasikan sebuah variable tanpa nilai
// 2. Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
// 3. Untuk membuat data NULL, kita bisamenggunakan kata kunci NULL (case insensitive)

$name = "Adrian";
$name = null;

$age = null;

echo "Name: ";
var_dump($name);
echo "Age: ";
var_dump($age);

echo "\n";

$name = "Adrian";

// Mengecek Apakah Data NULL
// 1. Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
// 2. Untuk mengecek apakah sebuah data bernilai Null, kita dapat menggunakan function "is_null(variabel)" => return: boolean

echo "Is Name Null?: ";
// echo is_null($name);
var_dump(is_null($name));
echo "\n";

// Menghapus Variabel
// 1. Selain mengubah menjadi NULL, di PHP kita juga bisa menghapus sebuah variabel, caranya dengan menggunakan function "unset($variable)"
// 2. Namun hati-hati, ketika kita hapus vairable, kita tidak bisa lagi mengakses variabel tsb, bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tsb
// 3. Agar lebiih aman, kita bisa menggunakan function "isset($variable)" untuk mengecek apakah sebuah varibale ada dan nilainya tidak null

$contoh = "Manda";
unset($contoh);
// echo $contoh;
// var_dump(is_null($contoh));

$contoh = "Ayusti";
// var_dump(is_null($contoh));
// $contoh = null;
unset($contoh);

var_dump(isset($contoh));

// Catatan:
// Gunakan is_null() untuk mengecek saat variabelnya ada
// Gunakan isset() untuk mengecek tapi tidak yakin variabelnya ada