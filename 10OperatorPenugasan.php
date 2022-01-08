<?php

// Operator Penugasan
// 1. Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan karakter "=" (sama dengan)
// 2. Operator penugasan sudah sering kita gunakan, terutama ketika mengubah value pada sebuah variable
// 3. Namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika

$total = 0;

$a = 10;
$b = 15;

// $total += $a;
// $total += $b;

// Atau bisa buat seperti ini:
$total += $a + $b;

var_dump($total);