<?php

// Constant
// 1. Variabel di PHP sifatnya mutable, artinya bisa dirubah
// 2. Jika kita ingin membuat variabel immutable (tidak bisa dirubah), maka TIDAK BISA dilakukan di PHP
// 3. Sebagai gantinya, terdapat fitur bernama "constant"
// 4. Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
// 5. Untuk membuat constant kita bisa menggunakan "function define()" 
// 6. Best practice pembuatan nama constant adalah menggunakan UPPER_CASE

// Contoh Penulisan Constant
// => define(nama_constant, value);
// Akses Constant
// => echo nama_constant

define("AUTHOR", "Adrian Mulyawan");
define("APP_VERSION", "V1.5");
// define("AUTHOR", "Mandalika"); tidak bisa di duplikat untuk constant yang memiliki nama constant = AUTHOR

echo "Author: ";
echo AUTHOR;
echo "\n";

echo "App Version: ";
echo APP_VERSION;