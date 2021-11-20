<?php

// - Variable Function
// 1. PHP mendukung konsep yang bernama variable function
// 2. Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
// 3. Untuk menggunakan variable function, kita bisa secara langsung memanggil "$namaVariable()", jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument/parameter)

// - Contoh Variable Function
// function foo() 
// {
//     echo "Foo" . PHP_EOL;
// }

// function bar()
// {
//     echo "Bar" . PHP_EOL;
// }

// $functionFoo = "foo";
// $functionFoo();

// $functionBar = "bar";
// $functionBar();

// Jika tidak ada function bernama barr() akan error
// $functionBarbar = "barr";
// $functionBarbar();

// ================================================================================================

// - Kegunaan Variable Function
// Kegunaan Variable Function ini adalah kita bisa menambahkan function sebagai argument/parameter dari "function" yang lain

// - Contoh Variable Function 1
// function sayHello(string $name, $filter) 
// {
//     $finalName = $filter($name);
//     echo "Hello $finalName" . PHP_EOL;
// }

// sayHello('wawan', 'strtoupper');
// Hasil: WAWAN

// - Contoh Variable Function 2: dengan menambahkan function buatan sendiri
function sayHello(string $name, $filter) 
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello('Wawan', "sampleFunction");
// Hasil: Hello Sample Wawan
sayHello('wawan', 'strtoupper');
sayHello('MANDA', 'strtolower');