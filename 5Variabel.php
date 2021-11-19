<?php

// Variable
// 1. Variabel: tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
// 2. Di PHP variabel bisa menampung berbagai jenis tipe data dan bisa berubah=ubah tipe data
// 3. Untuk membuat variabel kita bisa menggunakan tanda "$" diikuti nama variabelnya
// 4. Penamaan variabel tidak boleh mengandung spasi

$nama = "Adrian";
$umur = 24;

echo "Nama: ";
var_dump($nama);
echo "Umur: ";
var_dump($umur);

echo "\n";

// Variable Variables
// 1. PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable 
// 2. Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunkana secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
// 3. Untuk membuat variabel dari value variable kita bisa menggunakan "$$" diikuti nama variabelnya

$name = "Adrian";
$$name = "Mulyawan";
echo "Name: $name";
echo "\n";
echo "Name: $Adrian";