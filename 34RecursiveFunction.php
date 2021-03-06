<?php

// - Recursive Function
// 1. Recursive Function adalah kemampuan function untuk memanggil dirinya sendiri (memanggil function dirinya sendiri)
// 2. Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial

// - Kode Factorial Menggunakan Loop
function factorialLoop (int $value): int
{
    $total = 1;

    for ($i=1; $i <= $value ; $i++) { 
        $total = $total * $i;
        // ($total *= $i)
        
        // Hasil Iterasi:
        // Iterasi 1: 1 x 1 = 1
        // total = 1 (iterasi 1 ($i=1))

        // Iterasi 2: 1 * 2 = 2
        // total = 2 (iterasi 2 ($i=2))

        // Iterasi 3: 2 * 3 = 6
        // total = 6 (iterasi 3 ($i=3))

        // Iterasi 4: 6 * 4 = 24
        // total = 24 (iterasi 4 ($i=4))

        // Iterasi 5: 24 * 5 = 120
        // total = 120 (iterasi 5 ($i=5))
    }

    return $total;
}
var_dump(factorialLoop(5));
// Hasil: 120

echo PHP_EOL;

// - Kode Factorial Menggunakan Recursive Function
function factorialRecursive (int $value): int
{
    // value = 5
    // value = 4
    // value = 3
    // value = 2
    // value = 1
    if ($value == 1) {
        return 1;
    } else {
        echo "Value: $value * " . $value - 1 . PHP_EOL;
        return $value * factorialRecursive($value - 1);
        // 5 * (5-1) = 20
        // 20 * (4-1) = 60
        // 60 * (3-1) = 120
        // 120 * (2-1) = 120
    }
}
var_dump(factorialRecursive(5));

echo PHP_EOL;

// - Contoh Fungsi Rekursif 1: tampilkan data (echo), lalu lakukan proses rekursif
// function tampilkanAngka(int $jumlah, int $indeks = 1) 
// {
    // echo "Perulangan ke-{$indeks}" . PHP_EOL;
    // # Panggil dirinya sendiri selama $indeks < $jumlah
    // if ($indeks < $jumlah) {
        // tampilkanAngka($jumlah, $indeks + 1);
    // }
// }
// tampilkanAngka(10);
// Hasil:
// Perulangan ke-1
// Perulangan ke-2
// Perulangan ke-3
// Perulangan ke-4
// Perulangan ke-5
// Perulangan ke-6
// Perulangan ke-7
// Perulangan ke-8
// Perulangan ke-9
// Perulangan ke-10

// - Contoh Fungsi Rekursif 2: Lakukan proses rekursif lalu menampilkan data (echo)
function tampilkanAngka(int $jumlah, int $indeks = 1) 
{
    // Panggil dirinya sendiri selama $indeks < $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
    
    echo "Perulangan ke-{$indeks}" . PHP_EOL;

}

// Panggil function tampilAngka()
tampilkanAngka(5);
// Hasil:
// Perulangan ke-10
// Perulangan ke-9
// Perulangan ke-8
// Perulangan ke-7
// Perulangan ke-6
// Perulangan ke-5
// Perulangan ke-4
// Perulangan ke-3
// Perulangan ke-2
// Perulangan ke-1

// Kenapa seperti itu beda dengan contoh yang pertama?
// 1. Ketika fungsi tampilkanAngka dipanggil pertama kali, ia akan langsung memanggil dirinya sendiri.
// 2. Ketika ia dipanggil untuk ke-2 kalinya, ia juga langsung memanggil dirinya sendiri.
// 3. Ia terus melakukan hal yang sama sampai nilai $indeks = nilai $jumlah alias bernilai 20.
// 4. Baru setelah rantai paling akhir tidak lagi memanggil dirinya sendiri, ia akan mulai menampilkan angka 20.
// 5. Setelah rantai paling akhir selesai menampilkan angka 20, maka proses yang ke-19 pun dianggap telah selesai dari proses rekursif, dan ia akan mulai meng-echo angka 19.
// 6. Begitu seterusnya hingga kembali ke perulangan yang pertama.

echo PHP_EOL;

// ================================================================================================

// - Problem Recursive Function
// 1. Walaupun recursive function itu sangat menarik, namun kita perlu berhati-hati
// 2. Jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di PHP
// 3. Kenapa problem ini terjadi? Karena ketika kita memanggil function, PHP akan menyimpannya didalam stack, jika function tsb memanggil function lain, maka stack akan menumpuk terus, dan jika terlalu banyak, makan akan membutuhkan konsumsi memory besar, jika sudah melewati batas, maka kan terjadi error memory

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