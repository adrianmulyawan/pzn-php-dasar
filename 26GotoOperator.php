<?php

// Goto Operator
// 1. Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
// 2. Kenapa jarang digunakan karena jika terlalu menggunakan goto operator, kode program aplikasi akan membingunkan yang membaca kodenya
// 3. goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
// 4. Agar goto bisa loncar ke kode program, kita harus membuat label di php dengan menggunakan nama "label" lalu diakihiri ":" (colon)

// - Syntax goto
// goto nama_goto;

// - memanggil goto
// nama_goto:

// - Contoh go to 1:
// goto a;
// echo "Hello World!" . PHP_EOL;

// a:
// echo "Hello A" . PHP_EOL;
// Maksud dari kode diatas kita membuat operator goto dengan nama "a"
// Dan selanjutnya kita membuat / menampilkan tulisan "Hello World!
// Dibawahnya kita panggil operator goto tadi dan menambahkan / menampilkan "Hello A"
// Jika kita jalankan yang muncul hanya tulisan "Hello A". Mengapa demikian? karena disini kode php membaca dari atas kebawah dan saat melihat operator "goto a;" php menskip tulisan "Hello World" dan hanya menjadlan "Hello A"

// - Contoh go to 2: Kompleks
$counter = 1;
while (true) {
    echo "While Loop ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop!";
// Pada bagian ini kita membuat perulangan yang mengembalikan nilai dengan menggunakan while
// didalam perulangan ini terdapat pengkondisian, jika counter yang dilakukan sudah > dari 10 akan diarahkan/diloncat perulangannya dengan menggunakan "operator goto" keluar dari perulangan tsb
// Yang dimana akan diarahkan keluar perulangannya dan menjalankan / menampilkan tulisan "End Loop!"
// Hasil:
// While Loop ke-1
// While Loop ke-2 
// While Loop ke-3 
// While Loop ke-4 
// While Loop ke-5 
// While Loop ke-6 
// While Loop ke-7 
// While Loop ke-8 
// While Loop ke-9 
// While Loop ke-10
// End Loop!   