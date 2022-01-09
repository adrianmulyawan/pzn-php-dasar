<?php

// - Null Coalescing Operator
// 1. Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP.
// 2. Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tsb isinya null atau bukan
// 3. Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variabel)
// 4. Namun untungnya di php ada null coalescing operator menggunakan tanda "??"

// - Mengecek Data Null / Tidak Dengan IF STATEMENTS
// $data = [
//     "action" => "create"
// ];

// $data = [];

// if (isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

// echo $action . PHP_EOL;

// - Mengecek Data Null / Tidak Menggunak NULL COALESING OPERATOR
// $data = [];
// $data = [
//     "action" => "create"
// ];
$data = [
    "nama_depan" => "Adrian",
    "nama_belakang" => "Mulyawan"
];

$action = $data['nama_depan'] ?? 'nothing';
echo $action . PHP_EOL;

// $orang = "Adrian Mulyawan";
// $sayHi = "Hi $orang" ?? 'Tidak Ada User!';
// echo $sayHi . PHP_EOL;