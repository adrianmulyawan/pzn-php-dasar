<?php 

// - Variable Scope
// 1. Di PHP, kita bisa membuat variable diamanapun yang kita mau
// 2. Scope variable adalah dibagian mana saja sebuah variable bisa diakses
// 3. PHP memiliki 3 jenis variable scope
// > Global Scope
// > Local Scope
// > Static Scope

// =================================================================================================

// - Global Scope
// 1. Variable yang dibuat diluar function memiliki scope global
// 2. Variable di scope global hanya bisa dikases dari luar function
// 3. Artinya didalam function, kita tidak bisa mengaksesn variable di global scope

// - Contoh Global Scope
// Global Scope
// $name = "Eko";

// function sayHello()
// {
    // Panggil Variable Global
    // echo "Hello $name" . PHP_EOL;
// }

// sayHello();
// Akan terjadi error "Undefined variable '$name'"

// =================================================================================================

// - Local Scope
// 1. Variable yang dibuat didalam function memiliki scope lokal
// 2. Variable di scope local hanya bisa diakses dari dalam function itu sendiri
// 3. Artinya variable tsb tidak bisa diakses dari luar function atau dari function lain

// - Contoh Local Scope
// function createName()
// {
    // Local Scope
    // $name = 'Adrian';
    // echo "Hello, $name" . PHP_EOL;
// }

// createName();
// Panggil Variable $name dari function createName()
// echo $name . PHP_EOL;
// Error, variable name tidak ada didalam glolbal scope

// =================================================================================================

// - "global" Keyword
// 1. Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci "global"
// 2. Dengan menggunakan kata kunci "global", maka kita bisa mengakses variable yang ada di global scope dari dalam function

// - Contoh "global" Keyword
// $name = "Eko";

// function sayHello()
// {
    // Panggil global keyword
    // global $name;
    // echo "Hello $name" . PHP_EOL;
// }

// Memanggol function sayHello()
// sayHello();
// Hasil: Hello Eko

// =================================================================================================

// - $GLOBAL Variable
// 1. Selain menggunakn global keyword, setiap variable yang dibuat di global scope, secara otomatis akan disimpan didalam array $GLOBAL oleh PHP
// 2. Jadi kita bisa menggunakan $GLOBAL variable dengan key name variable nya dari dalam function jika ingin mengakses global variable 
// 3. $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses di scope manapun

// - Contoh $GLOBAL Variable
// $name = "Eko";

// function sayHello()
// {
    // Panggil global keyword
    // global $name;
    // echo "Hello $name" . PHP_EOL;
    
    // Panggil $GLOBALS Variable
    // echo $GLOBALS["name"];
// }

// Memanggol function sayHello()
// sayHello();
// Hasil: Hello Eko

// =================================================================================================

// - Static Scope
// 1. Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
// 2. Jika sebuah funtion selesai dieksekusi, maka siklus hidup local variablenya selesai
// 3. PHP memiliki scope yang bernama static
// 4. Static Scope hanya bisa di set ke local variable
// 5. Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
// 6. Artinya jika function tsb dieksekusi lagi, maka static variable tsb akan memiliki value dari sebelumnya

// - Contoh Static Scope
// 1. Tanpa keyword static
    // function increment()
    // {
        // $counter = 1;

        // echo "Counter: $counter" . PHP_EOL;

        // $counter++;
    // }

// Jalankan function increment
    // increment();
    // increment();
    // increment();
// Jika dijalankan counternya akan selalu 1. Kenapa demikia karena siklus hidupnya hanya sebatas function dieksekusi
// Jadi jika selesai dieksekusi maka siklus hidupnya selesai

// 2. Menggunakan Static Keyword
function increment()
{
    // Static Scope
    static $counter = 1;
    echo "Counter: $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
// Hasil:
// Counter: 1
// Counter: 2
// Counter: 3
