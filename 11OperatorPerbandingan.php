<?php

// Operator Perbandingan
// 1. Digunakan untuk membandingkan 2 buah value
// 2. Hasil dari operator perbandingan adalah boolean
// - true jika perbandingannya benar
// - false jika perbandingannya salah

// Operator Perbandingan
// 1. Sama dengan
// $a == $b 
// True jika $a sama dengan $b setelah dilakukan koversi tipe data
// Konversi tipe data (type juggling): otomatis merubah tipe data
// Contohnya saat memasukan string 10 dikonversikan menjadi int 10
$a1 = "10";
$a2 = 10;
$a3 = 10;
$a4 = 20;
echo "Hasil dari $a1 == $a2 adalah:  ";
var_dump($a1 == $a2);

// 2. Identik
// $a === $b
// True jika $a sama dengan $b dan memiliki tipe data yang sama
echo "Hasil dari $a1 === $a2 adalah:  ";
var_dump($a1 === $a2);
echo "Hasil dari $a2 === $a3 adalah:  ";
var_dump($a2 === $a3);

// 3. Tidak Sama Dengan
// $a != b
// $a <> $b
// True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
echo "Hasil dari $a1 != $a2 adalah:  ";
var_dump($a1 != $a2);
echo "Hasil dari $a4 != $a3 adalah: ";
var_dump($a4 != $a3);

// 4. Tidak Identik
// $a !== $b
// True jika $a tidak sama dengn $b atau tidak sama tipe data
echo "Hasil dari $a1 !== $a2 adalah:  ";
var_dump($a1 !== $a2);
echo "Hasil dari $a2 !== $a3 adalah:  ";
var_dump($a2 !== $a3);

// 5. Kurang dari 
// $a < $b 
// True jika $a < $b
echo "Hasil dari $a2 < $a4 adalah:  ";
var_dump($a2 < $a4);