<?php

// Increment Decrement
// 1. PHP mendukung gaya bahasa pemrograman C untuk menaikan atau menurunkan data number sejumlah 1 angka
// 2. Ini bisa mempersingkat kita ketikan ingin menaikan data

// 1. Post Increment
// $a++
// Kembalika $a lalu naikan satu angka
$a1 = 10;
echo $a1++;
echo "\n";
echo $a1;
echo "\n";
echo PHP_EOL;

// 2. Pre Increment
// ++$a 
// Naikan $a satu angka, lalu kembalikan $a
$a2 = 10;
echo ++$a2;
echo "\n";
echo $a2;
echo "\n";
echo PHP_EOL;

// 3. Post Decrement
// $a--
// Kembalikan $a lalu turunkan 1 angka
$a3 = 20;
echo $a3--;
echo "\n";
echo $a3;
echo "\n";
echo PHP_EOL;

// 4. Pre Decrement 
// --$a
// Turunkan $a satu angka, lalu kembalikan $a
$a4 = 30;
echo --$a4;
echo "\n";
echo PHP_EOL;

$a = 10;
$b = $a++;
// Ini Seperti
// $b = $a;
// $a += 1;
var_dump($a);
var_dump($b);

$b = 10;
$c = ++$b;
// Ini Seperti
// $b += 1
// $c = $b;
var_dump($b);
var_dump($c);
var_dump($c);