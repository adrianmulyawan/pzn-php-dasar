<?php

// - Break & Continue
// 1. Pada switch statement, kita sudah mengenal kata kunci "Break", yaitu untuk menghentikan case didalam switch
// 2. Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan
// 3. Namun berbeda dengan "Continue", continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya

// - Break: menghentikan seluruh perulangan
// - Continue: menghentikan perulangan saat ini, dan lanjut ke perulangan berikutnya

// - Contoh Break
// $counter = 1;
// Kondisinya selalu bernilai true
// while (true) {
//     echo "Hello Break: $counter" . PHP_EOL;
//     $counter++;
    
//     if ($counter > 10) {
//         break;
//     }
//     // break;
// }
// Pada praktiknya jika kita tidak menambahkan "break" didalam kode ini akan terjadi infinite loop (loop terus berjalan karna kondisinya selalu benar)
// Dengan break inilah kita akan menghentikan looping, dengan kondisi jika perulangan telah dilakukan sebanyakn 10x akan dihentikan perulangannya dengan menggunakan "break"

// - Contoh Continue
for ($counter = 1; $counter <= 100 ; $counter++) { 
    if ($counter % 2 == 0) {
        continue;
    }

    echo "Hello for: $counter" . PHP_EOL;
}
// Maksud dari kode diatas melakukan perulangan dari angka 1 - 100
// Didalam perulangan ini juga didalamnya terdapat pengkondisian jika angka yang di looping tsb di modulus 2 hasilnya = 0 (genap), maka akan di skip (continue)
// Yang ditampilkan hanya angka yang bernilai ganjil