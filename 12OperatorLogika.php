<?php

// Operator Logika
// 1. Operator Logika adalah operator untuk membandingkan 2 nilai boolean
// 2. Hasil dari operator logika adalah boolean lagi

// - AND (&&)
// $a && $b 
// True jika $a dan $b keduanya true 
var_dump(true && true);
var_dump(true && false);
echo PHP_EOL;

// - OR (||)
// $a || $b
// True jika $a dan $b salah satu atau keduanya true
var_dump(true || false);
var_dump(true || true);
echo PHP_EOL;

// - NOT (!) 
// !$a 
// Dibalik datanya jika dia true jadi false, jika dia false jadi true
// True jika $a bernilai false
var_dump(!true);
var_dump(!false);
echo PHP_EOL;

// - XOR (xor)
// $a xor $b 
// True jika $a dan $b salah satu true, tapi tidak keduanya
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
echo PHP_EOL;