<?php 

// - While Loop
// 1. While loop versi perulangan yang lebih sederhana dibandingkan for loop
// 2. Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement

// Syntax While Loop
// while (kondisi) {
//     # code...
//     # post_statement
// }

// - Contoh While Loop
// 1. Init Statement
// $counter = 1;

// // 2. Kondisi
// while ($counter <= 10) {
//     echo "Hello While Loop: $counter" . PHP_EOL;
//     // 3. Post Statement
//     $counter++;
// }

// - Syntax Alternatif While Loop
// 1. Init Statement
$counter = 1;

// 2. Kondisi
while ($counter <= 10) :
    echo "Hello While Loop: $counter" . PHP_EOL;
    // 3. Post Statement
    $counter++;
endwhile;
