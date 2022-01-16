<?php

// - is_ Function
// 1. PHP Memiliki banyak sekali function dengan prefix "is_"
// 2. Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuh data
// 3. https://www.php.net/manual/en/ref.var.php

// - Contoh is Function
// 1. is_string()   : Apakah tipe data string
// 2. is_bool()     : Apakah tipe data boolena
// 3. is_int()      : Apakah tipe data integer
// 4. is_float()    : Apakah tipe data number floating point
// 5. is_array()    : Apakah tipe data array
// 6. is_callable() : Apakah tipe data callable
// 6. is_null()     : Apakah tipe data null

// Contoh is function
$data = "Adrian Mulyawan";

var_dump(is_string($data));
// Hasil: true
var_dump(is_bool($data));
// Hasil: false
var_dump(is_int($data));
// Hasil: false
var_dump(is_float($data));
// Hasil: false
var_dump(is_array($data));
// Hasil: false
var_dump(is_callable($data));
// Hasil: false