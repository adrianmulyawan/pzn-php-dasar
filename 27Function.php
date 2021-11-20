<?php 

// - Function
// 1. Function adalah block kode program yang akan berjalan saat kita panggil
// 2. Sebelumnya kita sudah menggunakan function isset(), count(), dan lain-lain ini juga termasuk function (built in function dari php)
// 3. Untuk membuat function di PHP, kita bisa menggunakan kata kunci funtion, lalu diikuti dengan nama function, kurung "()" dan diakhiri dengan block "{}"
// 4. Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung "()" (nama_function())
// 5. Dibahasa pemrograman lain, function juga disebut dengan method

// - Syntax Function
// function function_name(#parameter) {
//     # code... / statement..
// }
// - Memanggil Function
// nama_function();

// - Contoh Function 1:
function sayHello() {
    echo "Hello Function" . PHP_EOL;
}
// Menjalankan function
sayHello();
sayHello();

// - Lokasi Function
// 1. PHP sangat fleksibel dalam pembuatan function
// 2. Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
// 3. Di PHP kita bebas membuat function dimanapun, bisa didalam if statement, didalam function, dan sebagainya
// 4. Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, makan function tsb tidak akan bisa digunakan

// - Contoh Function Belum Dijalankan
$buat = true;
if ($buat) {
    function sayHay() {
        echo "Hay Function" . PHP_EOL;
    }
}
sayHay();
// Jika dijalankan maka akan error kenapa? disini bisa dilihat variabel $buat bernilai "false"
// Ketika didalam pengkondisian variabel tersebut bernilai salah / false
// Dan ketika kita panggil functionnya maka akan error, karna function ini isitilahnya belum dipanggil / dijalankan / dibuat didalam php 