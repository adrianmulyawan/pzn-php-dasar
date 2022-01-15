<?php

// - Anonymous Function
// 1. Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
// 2. Anonymous function biasanya digunakan sebagai argument / sebagai value di variable
// 3. Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya

// - Kode Anonymous Function
$sayHello = function (string $name) 
{
    echo "Hello $name" . PHP_EOL;
};
$sayHello('Adrian Mulyawan');
// Hasil: Hello Adrian Mulyawan
$sayHello('Mandalika Ayusti Nawangsari');
// Hasil: Hello Mandalika Ayusti Nawangsari

// *$sayHello seakan-akan menjadi variable function

// ================================================================================================

// - Kode Anonymous Function Sebagai Argument/Parameter
function sayGoodBye (string $name, $filter) 
{
    $finalName = $filter($name);
    echo "Goodbye $finalName" . PHP_EOL;
}
// sayGoodBye("Wawan", function (string $name): string {
    // return strtoupper($name);
// });
// Hasil: Goodbye WAWAN

// Atau bisa kita simpan anonymous function ini didalam sebuah variabel
$functionFilter = function (string $name): string 
{
    return strtoupper($name);
};
sayGoodBye("Wawan", $functionFilter);
// Hasil: Goodbye WAWAN

// ================================================================================================

// - Mengakses Variabel di Luar Closure (Anonymous Function)
// 1. Secara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function
// 2. Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci "use" lalu diikuti variable-variable yang ingin kita gunakan

// - Kode Mengakses Variable Diluar Anonymous Function
$firstName = "Adrian";
$lastName = "Mulyawan";

// $sayHelloAdrian = function () {
//     echo "Hello $firstName $lastName" . PHP_EOL;
// };
// $sayHelloAdrian();
// Akan terjadi error karna php tidak tahu variabel $firstName dan $lastName, karna kedua variable ini berada diluar anonymous function

// Caranya kita dapat menambahkan "use ()" setelah deklarasi "function ()" dengan menambahkan variable yang akan digunakan
$sayHelloAdrian = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloAdrian();