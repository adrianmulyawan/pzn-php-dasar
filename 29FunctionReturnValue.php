<?php

// Function Return Value
// 1. Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function yang mengembalikan nilai
// 2. Dan didalam block function, untuk menghasilkan nilai tsb, kita harus menggunakan kunci "return", lalu diiukuti dengan data yang ingin dihasilkan
// 3. Kita hanya bisa menghasilkan 1 data disebuah function, tidak bisa lebih dari satu

// - Contoh Function Return Value 1
// function sum(int $a, int $b) {
//     $total = $a + $b;
//     return $total;
// }

// $result = sum(10,20);
// var_dump($result);

// $result = sum(100,100);
// var_dump($result);

// - Contoh Function Return Value 2
// function getFinalValue(int $value) {
//     if ($value > 100) {
//         return 'Nilai Tidak Valid';
//     } else if ($value >= 90) {
//         return 'A';
//     } else if ($value >= 80) {
//         return 'A-';
//     } else if ($value >= 70) {
//         return 'B';
//     } else if ($value >= 60) {
//         return 'C';
//     } else if ($value >= 50) {
//         return 'D';
//     } else {
//         return 'E';
//     }
// }

// $nilaiAdrian = getFinalValue(110);
// var_dump($nilaiAdrian);
// Hasil: Nilai Tidak Valid

// $nilaiManda = getFinalValue(100);
// var_dump($nilaiManda);

// ================================================================================================

// - Return Type Declarations
// 1. Sama seperti argument, pada return value pun kita bisa mendeklarasikan tipe datanya
// 2. Hal ini selain mempermudah kita ketika membaca tipe data kembalian functionnya, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
// 3. Untuk mendeklarasikan tipe data kembalian function, setelah kurung "()" kita bisa tambahan ":" diikuti tipe data kembaliannya

// - Contoh Return Type Declaration int
function sum(int $a, int $b): int 
{
    $total = $a + $b;
    return $total;
}

$result = sum(10,20);
var_dump($result);

// - Contoh Return Type Declaration string
function getFinalValue(int $value) {
    if ($value > 100) {
        return 'Nilai Tidak Valid';
    } else if ($value >= 90) {
        return 'A';
    } else if ($value >= 80) {
        return 'A-';
    } else if ($value >= 70) {
        return 'B';
    } else if ($value >= 60) {
        return 'C';
    } else if ($value >= 50) {
        return 'D';
    } else {
        return 'E';
    }
}

$nilaiAdrian = getFinalValue(95);
var_dump($nilaiAdrian);

$nilaiManda = getFinalValue(100);
var_dump($nilaiManda);