<?php

// - Variable Function
// 1. PHP mendukung konsep yang bernama variable function
// 2. Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
// 3. Untuk menggunakan variable function, kita bisa secara langsung memanggil "$namaVariable()", jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument/parameter)

// - Contoh Variable Function
// function foo() 
// {
    // echo "Foo" . PHP_EOL;
// }

// function bar()
// {
    // echo "Bar" . PHP_EOL;
// }

// Panggil Function
// foo();
// foo();
// bar();
// bar();

// $functionFoo = "foo";
// $functionFoo();

// $functionBar = "bar";
// $functionBar();

// Jika tidak ada function bernama barr() akan error
// $functionBarbar = "barr";
// $functionBarbar();

// Variabel Function: Memanggil Function Yang Memerlukan Argument/Parameter
// function sayHello(string $name)
// {
    // echo "Hello, $name" . PHP_EOL;
// }

// $functionName = "sayHello";
// $functionName('Adrian');

// ================================================================================================

// - Kegunaan Variable Function 1
// Kegunaan Variable Function ini adalah kita bisa membuat/menambah argument/parameter disebuah "function" yang dimana kita bisa memasukan "function" yang lain
// Intinya kita bisa menambahkan function yang lain didalam parameter functionnya

// - Contoh Variable Function 1
// function sayHello(string $name, $filter) 
// {
    // $finalName = $filter($name);
    // echo "Hello $finalName" . PHP_EOL;
// }

// sayHello("wawan", "strtoupper");
// Hasil: WAWAN
// Penjelasan:
// 1. Disini kita mempunyai function dengan nama sayHello(), dimana function tsb memiliki 2 parameter:
// > string $nama > $filter
// 2. $filter ini adalah parameter yang berupa function lain yang akan dipanggil
// 3. Seblum kita jalankan display / echo ("Hello $finalName" . PHP_EOL;) kita akan konversi parameter namanya (string $nama) dengan parameter filter ($filter)
// 4. Lalu kita simpan nilainya kedalam variable $finalName dan kemudian kita tampilkan dengan echo
// 5. Kemudian disini kita jalankan function sayHello() nya dengan mengirimkan 2 parameter
// > string $name = wawan
// > $filter = strtoupper (function bawaan dari php untuk membuat teks besar semua)
// 6. Dan yang terjadi didalam functionnya akan seperti ini
// 6.1 Isi dari function sayHello()
// function sayHello("wawan", "strtoupper") 
// {
    // $finalName = strtoupper(wawan);
    // echo "Hello $finalName" . PHP_EOL;
// }
// 7. Sehingga hasil echo = Hello WAWAN

// - Atau bisa dibuat seperti ini:
// $functionHello = "sayHello";
// $functionHello("wawan", "strtoupper");

// ================================================================================================

// - Kegunaan Variable Function 2

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

// Dengan variable function kita seakan-akan bisa mengirimkan function lain kedalam argument/parameter function yang kita miliki