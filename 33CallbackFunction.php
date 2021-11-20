<?php

// - Callback Function
// 1. Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesaui dengan yang diberikan di argument/parameter
// 2. Hal ini sebenarnya sudah kita pelajari di materi Variabel Function dan Anonymous Function
// 3. Namun di PHP ada cara lain untuk implementasi callback, yaitu dengan menggunakan tipe data "callable" yang kita tambakan didalam argument 
// 4. Dan untuk memanggil callback function tsb, kita bisa menggunakan function "call_user_func(callable, arguments)"

// - Kode: Callback Function
function sayHello (string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello('Adrian', "strtoupper");
sayHello('Adrian', "strtolower");

// Menambahkan Anonymous Function sebagai argument/parameter
sayHello("Manda", function (string $name): string {
    return strtoupper($name);
});

// Menambahkan Arrow Function sebagai argument/parameter
sayHello('Acha', fn(string $name) => strtolower($name)); 