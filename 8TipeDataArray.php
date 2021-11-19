<?php

// - Tipe Data Array
// 1. Array adalah tipe data yang berisikan data kosong atau banyak data
// 2. Array di PHP bisa berisikan data dengan jenis yang berbeda-beda
// 3. Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array sebanyak-banyaknya, tidak dibatasi kapasistasnya

// - Membuat array dengan function "array()"
$values = array(1,2,3,4.5);
echo "Array ke-1: ";
var_dump($values);
echo "\n";

// - Membuat array dengan "[]"
$names = ['Adrian', 'Manda', 'Budi', 'Siska'];
echo "Array ke-2: ";
var_dump($names);
echo "\n";

// - Operasi Array
// 1. Mengakses array Berdasarkan Indexnya
// => $array[index]
echo "Mengakses Array Index Ke-0: ";
var_dump($names[0]);
echo "\n";

// 2. Mengubah data di array pada nomor index dengan value baru
// => $array[index] = value
$names[2] = "Freya";
echo "Ubah isi dari array pada index ke-2: ";
var_dump($names[2]);
$names[3] = "Ilayya";
echo "Ubah isi dari array pada index ke-3: ";
var_dump($names[3]);
echo "\n";

// 3. Menambah data di array pada posisi paling belakang
// => $array[] = value
$names[] = "Jihan";
echo "Menambah data array baru: ";
var_dump($names);
echo "\n";

// 4. Menghapus data di array, index ototmatis hilang dari array
// unset($array[index])
unset($names[0]);
echo "Menghapus array dengan index ke-0: ";
var_dump($names);
// var_dump($names[0]); Jika dijalankan akan error karna data index ke-0 hilang
$names[0] = "Wawan";
var_dump($names);
var_dump($names[0]);
echo "\n";

// 5. Mengambil total data di array
// count($array)
echo "Jumlah data/element pada array: ";
var_dump(count($names));
echo "\n";

// - Array Sebagai Map
// 1. Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data benama Map, yaitu asosiasi antatra "Key" dan "Value"
// 2. Namun di PHP, Map bisa dibuat menggunakan array
// 3. Secara default array akan menggunakan index (number) sebagai key dan valuenya kita bisa bebas memasukan data kedalam Array
// 4. Namun jika kita ingin, kita juga bisa mengubah indexnya tidak harus menggunakan number, bisa gunakan tipe data lain, misalnya string
// 5. Hal tersebut terlihat seperti Map dibahasa pemrograman lain

// - Kode: Membuat Map
$adrian = array(
    'id'   => 1,
    'name' => 'Adrian Mulyawan',
    'age'  => 24
);
echo "Map ke-1: ";
var_dump($adrian);
// Mengambil nilai dengan map
echo "Mengambil nilai umur pada map ke-1: ";
var_dump($adrian["age"]);
echo "\n";

$manda = [
    'id'   => 2,
    'name' => 'Mandalika Ayusti Nawangsari',
    'age'  => 23
];
echo "Map ke-2: ";
var_dump($manda);
echo "Mengambil nilai nama pada map ke-2: ";
var_dump($manda['name']);
echo "\n";

// - Array Didalam Array
// 1. Seperti dijelaskan diawal, Array di PHP bisa berisikan data apapun
// 2. Sehingga kita juga bisa membuat array didalam array jika memang dibutuhkan 

// Kode: Array Didalam Array
$freya = [
    'id'   => 3,
    'name' => "Freya Kayyona Humaira",
    'age'  => 2,
    'data_ortu' => [
        'ibu'  => 'Uwik',
        'ayah' => 'Mput'
    ]
];
echo "Array Didalam Array: ";
var_dump($freya);
echo "Mengambil data orangtua (ibu): ";
var_dump($freya["data_ortu"]["ibu"]);