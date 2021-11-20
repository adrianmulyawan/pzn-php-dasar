<?php

// - Callback Function
// 1. Callback adalah sebuah mekanisme, dimana sebuah function dapat memanggil function lainnya sesuai dengan yang diberikan di argument/parameter
// 2. Hal ini sebenarnya sudah kita pelajari di materi Variabel Function dan Anonymous Function
// 3. Namun di PHP ada cara lain untuk implementasi callback, yaitu dengan menggunakan tipe data "callable" yang kita tambahkan didalam argument/parameter 
// 4. Dan untuk memanggil callback function tsb, kita bisa menggunakan function "call_user_func(callable, arguments/parameter)"

// - Kode: Callback Function
function sayHello (string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello('Adrian', "strtoupper");
sayHello('Adrian', "strtolower");

// Menambahkan Anonymous Function sebagai argument/parameter (callback)
sayHello("Manda", function (string $name): string {
    return strtoupper($name);
});

// Menambahkan Arrow Function sebagai argument/parameter
sayHello('Acha', fn(string $name) => strtolower($name)); 