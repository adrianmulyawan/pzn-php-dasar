<?php

// - Recursive Function
// 1. Recursive Function adalah kemampuan function untuk memanggil dirinya sendiri (memanggil function dirinya sendiri)
// 2. Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial

// - Kode Factorial Menggunakan Loop
function factorialLoop (int $value): int
{
    $total = 1;

    for ($i=1; $i <= $value ; $i++) { 
        $total *= $i;
    }

    return $total;
}
var_dump(factorialLoop(5));

// - Kode Factorial Menggunakan Recursive Function
function factorialRecursive (int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
        // 5*4=20, 20*3=60, 60*2=120
    }
}
var_dump(factorialRecursive(5));

// ================================================================================================

// - Problem Recursive Function
// 1. Walaupun recursive function itu sangat menarik, namun kita perlu berhati-hati
// 2. Jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di PHP
// 3. Kenapa problem ini terjadi? Karena kerika kita memanggil function, PHP akan menyimpannya didalam stack, jika function tsb memanggil function lain, maka stack akan menumpuk teus, dan jika terlalu banyak, makan akan membutuhkan konsumsi memory besar, jika sudah melewati batas, maka kan terjadi error memory

// - Kode: Error StackOverflow
// function loop(int $value)
// {
//     if ($value == 0) {
//         echo "End Loop" . PHP_EOL;
//     } else {
//         echo "Loop-$value" . PHP_EOL;
//         loop($value - 1);
//     }
// }
// loop(3000000);