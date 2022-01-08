<?php

// Operator Array
// 1. Di PHP Array memiliki operator khusus
// 2. Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi caranya sedikit berbeda

// Operator Array
// 1. Union: Menggabungkan 2 Buah Array
// $a + $b 
// Menggabungkan array $a dan $b
// $namaDepan = [
//     "nama_depan" => "Adrian"
// ];
// $namaBelakang = [
//     "nama_belakang" => "Mulyawan"
// ];
// $namaLengkap = $namaDepan + $namaBelakang;
// echo "Hasil Union: ";
// var_dump($namaLengkap);

// ====================================================================

// 2. Equality: Membandingkan 2 buah data array
// $a == $b
// True jika $a dan $b memiliki key dan value sama walapun letak posisinya tidak sama
// $menu1 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $menu2 = [
//     'minuman' => 'Esteh',
//     'makanan' => 'Nasi Goreng'
// ];
// $menuku1 = $menu1 == $menu2;
// echo "Hasil dari Equality: ";
// var_dump($menuku1);
// Hasil: true

// $menu3 = [
//     'makanan' => 'Roti Bakar',
//     'minuman' => 'Milk Shake'
// ];

// $menu4 = [
//     'makanan' => 'Mie Ayam Bakso Pangsit',
//     'minuman' => 'Teh Botol',
//     'food' => 'Roti Bakar',
//     'drink' => 'Milk Shake'
// ];
// $menuku2 = $menu3 == $menu4;
// echo "Hasil dari Equality: ";
// var_dump($menuku2);
// // Hasil: False

// ====================================================================

// 3. Identity: Membandingkan 2 buah data array (tetapi harus identik)
// $a === $b
// True jika $a dan $b memiliki key-value sama dan posisi sama
// $menu1 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $menu2 = [
//     'minuman' => 'Esteh',
//     'makanan' => 'Nasi Goreng'
// ];
// $menu = $menu1 === $menu2;
// echo "Hasil dari Identity: ";
// var_dump($menu);
// Hasil: false

// $menu1 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $menu2 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $menu = $menu1 === $menu2;
// echo "Hasil dari Identity: ";
// var_dump($menu);
// Hasil: true

// ====================================================================

// 4. Inequality
// $a != $b
// $a <> $b
// True jika $a dan $b tidak sama
// $menu1 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $menu2 = [
//     'food' => 'Esteh',
//     'makanan' => 'Nasi Goreng'
// ];
// $menu = $menu1 != $menu2;
// echo "Hasil dari Inequality: ";
// var_dump($menu);
// Hasil: True

// $menu1 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $menu2 = [
//     'minuman' => 'Esteh',
//     'makanan' => 'Nasi Goreng'
// ];
// $menu = $menu1 != $menu2;
// echo "Hasil dari Inequality: ";
// var_dump($menu);
// Hasil: False

// $menu1 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $menu2 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Dawet'
// ];
// $menu = $menu1 != $menu2;
// echo "Hasil dari Inequality: ";
// var_dump($menu);
// Hasil: True

// ====================================================================

// 5. Nonidentity 
// $a !== $b
// True jika $a dan $b tidak identik
// $menu1 = [
//     'makanan' => 'Nasi Goreng',
//     'minuman' => 'Esteh'
// ];
// $nama = [
//     'namaDepan' => 'Adrian',
//     'namaBelakang' => 'Mulyawan'
// ];
// $menu = $menu1 !== $nama;
// echo "Hasil dari Nonidentity: ";
// var_dump($menu);
// Hasil: true

$menu1 = [
    'makanan' => 'Nasi Goreng',
    'minuman' => 'Esteh'
];
$menu2 = [
    'makanan' => 'Nasi Goreng',
    'minuman' => 'Esteh',
];
$menu = $menu1 != $menu2;
echo "Hasil dari Nonidentity: ";
var_dump($menu);
// Hasil: False