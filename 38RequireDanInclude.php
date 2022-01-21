<?php

// - Require dan Include
// 1. Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file
// 2. Lebih baik dipisah ke beberapa file agar kode program tidak telrlau bertumpuk di satu file
// 3. PHP memiliki function "require" dan "include" yang bisa kita gunakan untuk mengambil file php lain
// 4. Lantas apa bedanya "Require" dan "Include" ?
// 5. Pada "require", jika file yang kita ambil tidak ada, maka akan terjadi error dan program akan terhenti
// 6. Pada "include", jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan

// ==============================================================================================

// - Contoh 1: Memanggil File PHP Lain Menggunakan Require

// Panggil File myFunction.php Menggunakan "Require"
    // require "lib/myFunction.php";

// Jalankan fungsi yang ada didalam file myFunction.php
    // echo sayHello("Adrian", "Mulyawan");

// Bagaimana jika kita menggunakan "Require" tetapi file tsb tidak ada?
    // require "lib/myFunc.php";
    // echo sayHello("Adrian", "Mulyawan");

// Ketika dijalankan akan terjadi error dan program terhenti karna tidak ada didalam folder "lib" tidak terdapat file "myFunc.php"

// ==============================================================================================

// Contoh 2: Memanggil File PHP Lain Menggunakan Include

// Panggil file myFunction.php
    // include "lib/myFunction.php";
// Jalankan fungsi sayHello() yang berada didalam file myFunction.php
    // echo sayHello("Adrian", "Mulyawan");

// Bagaimana jika menggunakan include tapi filenya tidak ada / typo
    // include "lib/myFunc.php";
    // echo sayHello("Adrian", "Mulyawan");

// Jika menggunakan include jika file tsb tidak ada / typo dalam penulisannya erronya berbeda dengan menggunakan require. Jika menggunakan include, error yang ditampilkan adalah function sayHello() tidak ditemukan dan warning.

// ==============================================================================================

// - Posisi Require dan Include
// 1. Kode program PHP akan dibaca dari atas kebawah, oleh karena itu pastika posisi require dan include sesuai dengan yang kita inginkan
// 2. Misal jika sampai kita salah menempatkan posisi require dan include, bisa jadi kita malah memanggil function yang belum didefinisikan

// Contoh Pemanggilan Require / Include yang salah
    // echo sayHello("Adrian", "Mulyawan");
    // include "lib/myFunction.php";

// Jika kita jalankan seperti diatas akan error kenapa? karena function sayHello() berada didalam file "lib/myFunction.php" 

// ==============================================================================================

// - require_once dan include_once
// 1. function require dan include akan selalu mengambil file yang kita inginkan
// 2. Jika kita beberapa kali menggunakan require dan include file yang sama, makan file tsb akan berkali-kali pula kita ambil
// 3. Hal ini akan menjadi masalah jika misal dalm file yang kita ambil terdapat definisi function, sehingga jika dimbil berkali-kali akan menyebabkan redeclare function
// 4. Untuk di PHP terdapat function "require_once" dan "include_once", function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, makan tidakan akan diambil lagi

// - Contoh include berulang-ulang
    // include "lib/myFunction.php";
    // include "lib/myFunction.php";
    // echo sayHello("Mandalika",'Ayusti');

// Yang terjadi maka akan terjadi error "cannot redeclare sayHello();

// - Menggunakan include_once / required_once
include_once "lib/myFunction.php";
include_once "lib/myFunction.php";

echo sayHello("Adrian", "Mulyawan");

// Jika dijalan maka akan menampilkan "Hello Adrian Mulyawan" dan dianggap hanya sekali dipanggil