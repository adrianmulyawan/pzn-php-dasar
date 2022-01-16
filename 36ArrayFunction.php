<?php

// - Array Function
// 1. Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data array
// https://www.php.net/manual/en/ref.array.php

// - Contoh Array Function
// 1. array_keys() : Mengambil semua keys milik array
$mahasiswa1 = ["Hakaman", "Irfan", "Harry", "Soleh", "Tahmid"];
var_dump(array_keys($mahasiswa1));
// Hasil:
// array(5) {
//     [0]=>   
//     int(0)  
//     [1]=>   
//     int(1)  
//     [2]=>   
//     int(2)  
//     [3]=>   
//     int(3)  
//     [4]=>   
//     int(4)  
// }

// 2. array_values() : Mengambil semua values milik array
$mahasiswa2 = ["Hakaman", "Irfan", "Harry", "Soleh", "Tahmid"];
var_dump(array_values($mahasiswa2));
// Hasil:
// array(5) {
//   [0]=>
//   string(7) "Hakaman"
//   [1]=>
//   string(5) "Irfan"
//   [2]=>
//   string(5) "Harry"
//   [3]=>
//   string(5) "Soleh"
//   [4]=>
//   string(6) "Tahmid"
// }


// 3. array_map() : Mengubah semua data array dengan callback (yang diubah mmenjadi data array baru)
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult); // Hasil data barunya
// Hasil:
// array(10) {
//     [0]=>    
//     int(10)  
//     [1]=>    
//     int(20)  
//     [2]=>    
//     int(30)  
//     [3]=>    
//     int(40)  
//     [4]=>    
//     int(50)  
//     [5]=>    
//     int(60)  
//     [6]=>
//     int(70)
//     [7]=>
//     int(80)
//     [8]=>
//     int(90)
//     [9]=>
//     int(100)
// }

$siswa = ["Adrian", "Manda", "Acha"];
$funcUpper = function (string $value): string {
    return strtoupper($value);
};
$finalResult = array_map($funcUpper, $siswa);
var_dump($finalResult);
// Hasil: 
// array(3) {
//     [0]=>
//     string(6) "ADRIAN"
//     [1]=>
//     string(5) "MANDA"
//     [2]=>
//     string(4) "ACHA"
// }

// 4. sort() : Mengurutkan array
$angka1 = [10, 1, 2, 3, 5, 4, 7, 6, 8, 9];
sort($angka1);
var_dump($angka1);
// Hasil: 
// array(10) {
//     [0]=>
//     int(1)
//     [1]=>
//     int(2)
//     [2]=>
//     int(3)
//     [3]=>
//     int(4)
//     [4]=>
//     int(5)
//     [5]=>
//     int(6)
//     [6]=>
//     int(7)
//     [7]=>
//     int(8)
//     [8]=>
//     int(9)
//     [9]=>
//     int(10)
// }

// 5. rsort() / reverse sort : Mengurutkan array terbalik
$angka2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
rsort($angka2);
var_dump($angka2);
// Hasil:
// array(10) {
//   [0]=>
//   int(10)
//   [1]=>
//   int(9)
//   [2]=>
//   int(8)
//   [3]=>
//   int(7)
//   [4]=>
//   int(6)
//   [5]=>
//   int(5)
//   [6]=>
//   int(4)
//   [7]=>
//   int(3)
//   [8]=>
//   int(2)
//   [9]=>
//   int(1)
// }

// 6. shuffle() : Mengubah posisi data di array secara random
$angka3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($angka3);
var_dump($angka3);
// Hasil: 
// array(10) {
//     [0]=>
//     int(1)
//     [1]=>
//     int(7)
//     [2]=>
//     int(8)
//     [3]=>
//     int(6)
//     [4]=>
//     int(4)
//     [5]=>
//     int(5)
//     [6]=>
//     int(3)
//     [7]=>
//     int(10)
//     [8]=>
//     int(9)
//     [9]=>
//     int(2)
// }