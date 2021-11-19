<?php

// - Expression
// 1. Expression adalah bagain terpenting dari PHP
// 2. Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
// 3. Secara sederhana, expression adalah apapaun yang memiliki nilai atau value

// Contoh Expression 1:
$a = 5;
$b = $a;
// $a = 5 ketika kita menuliskan "5", maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah sebuah expression
// Lalu kita menulis kode $b = $a bisa kita bilang adalah expression, karena $a adalah nilai 5

// Contoh Expression 2:
function getValue() {
    return 100;
}
var_dump(getValue());
$value = getValue();
var_dump($value);
// Pada kode diatas, getValue() adalah expression, karena function getValue() bernilai atau mengembalikan angka 100

// ==============================================================================================

// - Statement
// 1. Statement bisa dibilang adalah kalimat lengkap dalam bahasa PHP
// 2. Sebuah Statement berisikan execution komplit, biasanya diakiri dengan titik koma (;)

// Conton Statement 1:
$nama = 'Adrian Mulyawan';
echo $nama;
$date = new DateTime();

// ==============================================================================================

// - Block
// 1. Block adalah kumpulan statement yang terdiri dari nol / lebih statement
// 2. Block diawali dan diakhiri dengan kurung kurawal "{}"

// Contoh Block 1:
function runApp($name) {
    // Terdapat 4 statement didalamnya
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

var_dump(runApp());