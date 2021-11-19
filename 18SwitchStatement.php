<?php

// Switch Statement
// 1. Kadang kita hanya butuh menggunakan kondisi sederhana di if statements, seperti hnya menggunakan pebandingan == 
// 2. Switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
// 3. Kondisi di Switch statement hanya untuk perbandingan ==

// Syntax Switch
// switch ($variable) {
//     case 'value':
//         # code...
//         break;
//     default:
//         # code...
//         break;
// }

// Buat menggunakan IF

// $nilai = "A";

// if ($nilai == 'A') {
//     echo "Anda lulus dengan nilai sangat baik" . PHP_EOL;
// } elseif ($nilai == 'B' || $nilai == 'C') {
//     echo "Anda lulus" . PHP_EOL;
// } elseif ($nilai == 'D') {
//     echo "Anda tidak lulus" . PHP_EOL;
// } else {
//     echo "Mungkin anda salah jurusan" . PHP_EOL;
// }

// Contoh Penerapan Switch
// $nilai = "A";
// switch ($nilai) {
//     case 'A':
//         echo "Anda lulus dengan nilai sangat baik" . PHP_EOL;
//         break;
//     case 'B':
//     case 'C':
//         echo "Anda lulus" . PHP_EOL;
//         break;
//     case 'D':
//         echo "Maaf, anda tidak lulus" . PHP_EOL;
//         break;
//     default:
//         echo "Mungkin anda salah jurusan" . PHP_EOL;
//         break;
// }

// Syntax Alternatif Switch
// 1. Sama seperti if statement, switch statement juga bisa tanpa menggunakan "{}" (Kurung Kurawal)
// 2. Namun diakhir switch statement, kita harus menambahkan kata kunci endswitch

$nilai = "A";
switch ($nilai) :
    case 'A':
        echo "Anda lulus dengan nilai sangat baik" . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Anda lulus" . PHP_EOL;
        break;
    case 'C':
        echo "Maaf, anda tidak lulus" . PHP_EOL;
        break;
    default :
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        break;
endswitch;