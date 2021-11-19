<?php

// - Do While Loop
// 1. Perulang yang mirip dengan while
// 2. Perbedaannya hanya pada pengecekan kondisi
// 3. Pengecekan kondisi di while loop dilakukan diawal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
// 4. Oleh karna itu do while loop minimal pasti sekali perulangan dilakukan walupun kondisi tidak bernilai true

// - Syntax Do While
// do {
//     # code...
// } while (#kondisi);

// - Contoh Syntax Do While Loop 1
// 1. Init Statement
// $counter = 100;
// do {
//     echo "Ini adalah do while ke-$counter" . PHP_EOL;
//     // 2. Post Statement
//     $counter++;
// } while ($counter <= 10); // 3. Kondisi
// Hasil: Ini adalah do while ke-100
// Walaupun kondisinya tidak terpenuhi do while loop tetap menjalankan perulangan sebanyak 1x

// - Contoh Syntax Do While Loop 2
// 1. Init Statement
$counter = 1;
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    // 2. Post Statement
    $counter++;
} while ($counter <= 10); // 3. Kondisi