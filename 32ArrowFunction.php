<?php

// - Arrow Function
// 1. Arrow Function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana cara pembuatannya
// 2. Secara garis besar, sebenarnya arrow function dan anonymous function adalah 2 hal yang sama
// 3. Hal yang membedakan di arrow function adalah,secara otomatis variable diluar closure bisa digunakan, tidak seperti di anonymous function yang harus disebutkan secara manual menggunakan kata kunci "use ($namaVariable)"
// 4. Pembuatan arrow function tidak menggunakan kata kunci "function" melainkan "fn()"
// 5. Arrow function dikhususkan untuk pembuatan function yang sederhana

// - Kode: Pembuatan Arrow Function
$firstName = "Adrian";
$lastName = "Mulyawan";

// Menggunakan Anonymous Function
$anonymousFunction = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$anonymousFunction();
// Hasil: Hello Adrian Mulyawan

// Menggunakan Arrow Function
$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $arrowFunction();
// Hasil: Hello Adrian Mulyawan