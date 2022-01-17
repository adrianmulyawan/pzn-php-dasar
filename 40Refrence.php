<?php

// - Refrence
// 1. Refrence adalah mengakses variable yang sama dengan nama variable yang berbeda
// 2. Refrence di PHP tidak sama dengan refrence di bahasa pemrograman seperti C / C++ yang memiliki fitur pointer
// 3. Analogi Reference itu seperti file, jika variable adalah file, dan value nya adalah isi file nya, maka reference adalah membuat shortcut (di Windows) atau alias (di Linux / Mac) terhadap file yang sama
// 4. Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun berubah
// 5. Untuk membuat reference terhadap variable, kita bisa menggunakan karakter "&" 

// =================================================================================================

// - Assign By Reference / Refrence Terhadap Variable
// 1. Pertama, PHP Refrence bisa memungkinan kita bisa membuat beberapa variable menuju ke value yang sama

// - Contoh Assign By Refrence
    // $name = "Adrian";

// Variable $otherName merefrence variable $name
    // $otherName = &$name;
// Ubah value $otherName = "Mandalika"
    // $otherName = "Mandalika";

// Jalankan variable $name
    // echo $name . PHP_EOL;
// Hasil yang ditampilkan adalah "Mandalika", karena saat kita mengubah value dari refrence ($otherName) maka variable aslinya ikut berubah juga

// =================================================================================================

// - Pass By Reference / Refrence Terhadap Argument/Parameter
// 1. Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan refrence

// - Contoh Pass By Refrence
// > Tanpa Menggunakan Refrence
    // function increment(int $value)
    // {
        // $value++;
    // }
    
    // $counter = 1;
    // increment($counter);
    
    // echo $counter;
// Hasilnya: 1

// > Menggunakan Refrence
    // function increment(int &$value)
    // {
        // $value++;
        // echo "Nilai Value adalah $value" . PHP_EOL;
    // }

    // $counter = 1;
    // increment($counter);
    // echo "Nilai Counter adalah $counter" . PHP_EOL;

// Hasilnya: 
// Nilai Value adalah 2
// Nilai Counter adalah 2

// Karena disini argument/parameter "value" di function increment() merefrence ke variale $counter. Dimana pada saat function tsb dijalankan menaikan satu angka ($value = $value + 1) yang dimana argument $value tsb menyimpan nilai = 1. Dan Pada saat kita print "echo $counter" yang ditampilkan/dihasilkan adalah 2

// =================================================================================================

// - Returning Refrence / Refrence Terhadap Return Value
// 1. PHP juga bisa mengembalika refrence pada function
// 2. Namun hati-hati, gunakan fitur ini jika memanga ada alasannya, karna fitur ini bisa membingungkan

// - Contoh Returning Refrences
// Tambahkan &getValue untuk memberitahu kita menggunakan Returning Refrence
function &getValue()
{
    static $value = 100;
    return $value;
}

// var a merefrence ke function getValue()
$a = &getValue();
// Ubah nilainya menjadi 200
$a = 200;

// var b merefrence ke function getValue()
$b = &getValue();
// Jalankan var b
echo $b . PHP_EOL;
// Hasilnya menjadi 200, karena di var a kita ubah valuenya menjadi 200 yang dimana $value juga menggunakan static scope sehingga siklus hidupnya tidak berhenti walapun function tsb telah selesai dieksekusi