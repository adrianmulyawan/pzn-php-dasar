<?php

// - For Loop
// 1. For adalah salah satu kunci yang bisa digunakan untuk melakukan perulangan.
// 2. Block kode yang terdapat didalam for akan selalu diulangi selama kondisi for terpenuhi.

// - Syntax For Loop 
// for (init statement; kondisi; post statement) { 
//     # code...
// }

// Penjelasan Syntax For Loop
// 1. Init Statement akan dieksekusi hanya sekali diawal perulangan
// 2. Kondisi akan dilakukan pengecakan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
// 3. Post statement akan dieksekusi setiap kali diakhir perulangan
// 4. Init statement, kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi berarti kondisi selalu bernilai true

// - Infinite For Loop
// for (; ;) { 
//     echo "Hello For Loop" . PHP_EOL;
// }
// Hasil: Hello For Loop dilakukan terus menerus dan tidak akan berhenti

// - Contoh For Loop 1
// $counter = 1;
// for ( ; $counter <= 10 ; ) { 
//     echo "Ini adalah for loop ke-$counter" . PHP_EOL;
//     $counter++;
// }

// - Contoh For Loop 2 (Dengan Init Statement & Kondisi)
// for ($counter = 1; $counter <= 10;) { 
//     echo "Ini adalah for loop ke-$counter" . PHP_EOL;
//     $counter++;
// }

// - Contoh For Loop 3 (Dengan Init Statement, Kondisi, & Post Statement)
// for ($counter=1; $counter <= 10; $counter++) { 
//     echo "Ini adalah for loop ke-$counter" . PHP_EOL;
// }

// - Contoh For Loop
// $nilai = 10;
// for ($i=0; $i < $nilai; $i++) { 
//     echo "Nilai $i" . PHP_EOL;
// }

// - Contoh For Loop Decrement
// for ($counter=10; $counter >= 1; $counter--) { 
//     echo "Ini adalah for loop $counter" . PHP_EOL;
// }

// - Syntax Alternatif For Loop
for ($counter=10; $counter >= 1; $counter--) :
    echo "Ini adalah for loop $counter" . PHP_EOL;
endfor;