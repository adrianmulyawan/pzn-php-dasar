<?php

// For Each Loop
// 1. Kadang kita bisa mengakses data array menggunakan perulangan
// 2. Mengakses data array menggunakan perualngan sangat bertele-tele, kita harus membuat counter, lalu mengakses array mengugnakan counter yang kita buat
// 3. Namun untungnya, di PHP terdapat perulangan "foreach", yang bisa digunakan untuk mengakses seluruh data di array secara otomatis

// - Syntax For Each
// foreach ($variable as $key => $value) {
//     # code...
// }

// - Mengakses array dengan for loop
// $names = ['Adrian', 'Manda', 'Alfan', 'Putri', 'Acha'];
// for ($i = 0; $i < count($names); $i++) { 
//     echo "Data ke-{$i}: " . $names[$i] . PHP_EOL;
// }

// - Mengakses Array Dengan Foreach
// $names = ['Adrian', 'Manda', 'Alfan', 'Putri', 'Acha'];
// foreach ($names as $name) {
//     echo "Hasil Perulangan Dengan Foreach: $name" . PHP_EOL;
// }

// - Mengakses Array yang menggunakan Key-Value (Map)
$person = [
    'first_name' => 'Adrian',
    'last_name'  => 'Mulyawan',
    'age'        => 24,
    'birthday'   => 'Pontianak, 01 November 1997'
];

foreach ($person as $key => $value) {
    echo "Keynya: $key, valuenya: $value" . PHP_EOL;
}