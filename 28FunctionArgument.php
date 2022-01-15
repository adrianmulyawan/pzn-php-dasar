<?php

// - Function Argument
// 1. Kita bisa mengirim informasi ke function yang ingin kita panggil (argument/parameter)
// 2. Untuk melakukan hal tersebut, kita perlu menambahkan argument / parameter di function yang sudah kita buat
// 3. Cara membuat argument sama seperti cara membuat variabel ($nama_argument_atau_parameter)
// 4. Argument ditempatkan didalam kurung "()" di deklarasi function
// 5. Argumet bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma ","

// - Contoh Function Argument
// function sayHello($name) {
//     echo "Hello $name" . PHP_EOL;
// }
// sayHello('Adrian');
// sayHello('Manda');
// sayHello(); => Error, karna kita tidak menambahkan argument/parameter didalamnya

// - Contoh Function > 1 Argument
// function sayHello($first_name, $last_name) {
//     echo "Hello $first_name $last_name" . PHP_EOL;
// }
// sayHello('Adrian', 'Mulyawan');
// sayHello('Mandalika', 'Ayusti');

// ===============================================================================================

// - Default Argument Value
// 1. PHP mendukung default argument value
// 2. Fitur ini memungkinkan jika ketika kita memanggil function tidak memasukan parameter, kita bisa menenetukan data defaultnya apa

// - Contoh Default Argument Value
// function sayHello($name = 'User') {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello('Adrian');
// sayHello('Mandalika');
// sayHello(); => Tidak error, karna disini kita memiliki nilai defaulut parameter "User"

// ===============================================================================================

// - Kesalahan Default Argument Value
// 1. Default argument value bisa disimpan didalam argument/parameter manapun
// 2. Nmaun jika argument lebih dari satu, dan kita menyimpat default argument value di parameter awal, maka itu kurang berguna

// - Contoh Kesalahan Default Argument Value
// function sayHello($first_name = "Anonymous", $last_name) {
//     echo "Hello $first_name $last_name" . PHP_EOL;
// }
// sayHello('Mulyawan');
// tidak akan berguna jadi yang kita isikan ini dianggap sebagai argument/parameter pertama
// dan ketika dijalankan akan error
// Untuk mengakalinya kita bisa membuat parameter yang ingin diisi default argument value dibelakang

// function sayHello($last_name, $first_name = "Anonymous") {
//     echo "Hello $first_name $last_name" . PHP_EOL;
// }
// sayHello('Mulyawan');
// sayHello('Ayusti', 'Mandalika');

// ===============================================================================================

// - Type Declaration
// 1. Sama seperti variabel, argument di PHP bisa kita masukkan data yang dinamis
// 2. Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
// 3. Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tsb
// 4. Jika tipe data value tidak sesuai, maka akan terjadi error
// 5. Secara default PHP akan melakukan percoba konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi mengirim string, makan PHP akan otomatis mengkonversi string tsb menjadi int

// - Valid Type 1
// 1. class / interface: Parameter harus tipe class / interface
// 2. self: Parameter harus sama dengan class dimana function itu dibuat
// 3. array: Parameter harus array
// 4. callable: Parameter harus callable
// 5. bool: Parameter harus boolean
// 6. float: Parameter harus float
// 7. int: Parameter harus integer number
// 8. string: Parameter harus string
// 9. interable: Parameter harus array / tipe traversable
// 10. object: Parameter harus sebuah object

// - Contoh Type Declaration
// function sum(int $a, int $b) {
    // $total = $a + $b;
    // echo "Hasilnya Penjumlahan $a + $b = $total" . PHP_EOL;
// }

// sum(100, 100);
// Hasil: True / 200

// sum("100", "100");
// Hasil: True / 200
// String di parsing ke integer

// sum("100", 'salah');
// Hasil: False / Error
// Salah tidak bisa di parsing ke int

// sum(true, false);
// Hasil: True / 1
// True = 1, False = 0

// sum([], []);
// Hasil: False
// Tidak bisa di konversi ke int

// ===============================================================================================

// - Variabel Length Argument List
// 1. Variabel-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value (data)
// 2. Variabel-length argument list secara otomatis akan membuat argument tsb menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
// 3. Variabel length argument list hanya bisa dilakukan di argument posisi terakhir
// 4. Untuk membuat variabel length argument list, kita bisa memngunakan tanda "..." (titik 3x) sebelum nama argument

// - Contoh menggunakan array
// function sumAll(array $values) {
//     $total = 0;
//     foreach ($values as $value) {
//         $total += $value;
//     }
//     echo "Total penjumlahan " . implode(",", $values) . " adalah = $total" . PHP_EOL;
// }
// sumAll([1,2,3,4,5]);
// Hasil: Total penjumlahan 1,2,3,4,5 adalah = 15

// - Contoh Variabel length argument list
function sumAll(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total penjumlahan " . implode(",", $values) . " adalah = $total" . PHP_EOL;
}
// sumAll(1,2,3,4,5);
// Hasil: Total penjumlahan 1,2,3,4,5 adalah = 15

// Bagaimana jika kita memiliki data yang berupa array ?
$values = [10,20,30,40,50];
// sumAll($values); Hasilnya bakal error

// Kita dapat menambahkan "..." (titik 3x didepan argument/parameter) pada saat memanggil functionnya
sumAll(...$values);
// Hasil: Total penjumlahan 1,2,3,4,5 adalah = 15