<?php

// - String Function
// 1. Sebelumnya kita pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string (strtoupper, strtolower, implode, dll)
// 2. Sebenarnya banyak sekali function bawaan PHPH yang bisa kita gunakan untuk memanipulasi string
// https://www.php.net/manual/en/ref.strings.php

// - Contoh String Function
// 1. join() / implode() : menggabungkan array menjadi sebuah string
var_dump(join(',', [1,2,3,4,5]));
// Hasil: string(9) "1,2,3,4,5"
var_dump(implode(';', [10,11,12,13,14,15]));
// Hasil: string(17) "10;11;12;13;14;15"

// ================================================================================================

// 2. explode() : memecah string menjadi sebuah array
var_dump(explode(" ", "Muhammad Adrian Mulyawan"));
// Hasil:
// array(3) {
//     [0]=>
//     string(8) "Muhammad"        
//     [1]=>
//     string(6) "Adrian"
//     [2]=>
//     string(8) "Mulyawan"        
// }
// Penjelasan yang diambil untuk dipecah menjadi array berdasarakn separotrnya, yang mana disini adalah "spasi" yang dijadikan acuan pemecahan string menjadi array

$exExplode = explode(" ", "Mandalika Ayusti Nawangsari");
echo "Hasil Explode Indeks ke-1: {$exExplode[0]}" . PHP_EOL;

// ================================================================================================

// 3. strtolower() : mengubah string menjadi lowercase (huruf kecil)
var_dump(strtolower('AdRiAn'));
// Hasil: "adrian"

// ================================================================================================

// 4. strtoupper() : mengubah string menjadi uppercase (huruf besar)
var_dump(strtoupper('manda'));
// Hasil: MANDA

// ================================================================================================

// 5. substr() : mengambil bagian string
var_dump(substr('Adrian Mulyawan', 0, 3));
// Hasil: Adr

// ================================================================================================

// 6. trim() : menghapus whitespace didepan dan belakang string
var_dump(trim("       ADRIAN       "));
// Hasil: ADRIAN