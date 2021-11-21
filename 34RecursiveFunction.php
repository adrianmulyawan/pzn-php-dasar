<?php

// - Recursive Function
// 1. Recursive Function adalah kemampuan function untuk memanggil dirinya sendiri (memanggil function dirinya sendiri)
// 2. Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial

// - Kode Factorial Menggunakan Loop
function factorialLoop (int $value): int
{
    $total = 1;

    for ($i=1; $i <= $value ; $i++) { 
        $total *= $i;
    }

    return $total;
}
var_dump(factorialLoop(5));

// - Kode Factorial Menggunakan Recursive Function
function factorialRecursive (int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
        // 5*4=20, 20*3=60, 60*2=120
    }
}
var_dump(factorialRecursive(5));

// - Contoh Fungsi Rekursif 1: tampilkan data (echo), lalu lakukan proses rekursif
// function tampilkanAngka(int $jumlah, int $indeks = 1) 
// {
//     echo "Perulangan ke-{$indeks}" . PHP_EOL;
//     # Panggil dirinya sendiri selama $indeks < $jumlah
//     if ($indeks < $jumlah) {
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
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
tampilkanAngka(10);

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

// ================================================================================================

// - Problem Recursive Function
// 1. Walaupun recursive function itu sangat menarik, namun kita perlu berhati-hati
// 2. Jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di PHP
// 3. Kenapa problem ini terjadi? Karena kerika kita memanggil function, PHP akan menyimpannya didalam stack, jika function tsb memanggil function lain, maka stack akan menumpuk teus, dan jika terlalu banyak, makan akan membutuhkan konsumsi memory besar, jika sudah melewati batas, maka kan terjadi error memory

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