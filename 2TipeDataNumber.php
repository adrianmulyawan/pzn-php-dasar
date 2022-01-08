<?php

// Int: decimal, hexadecimal, octal, binary
// Float: bilang pecahan (7.5)

// Di PHP kita bisa menambahkan "_" (garis bawah) pada angka, ini hanya digunakan untuk memudahkan membacanya
// Saat dijlankan "_" akan di IGNORE

// Untuk angkat negatif dapat kita beri tanda "-"

// Number: Int
echo "Decimal: ";
var_dump(1234); 
// var_dump: digunakan untuk memberitahu tipe datanya apa

echo "Octal: ";
var_dump(01234);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binarnya: ";
var_dump(0b111);

echo "Underscore di Number: ";
var_dump(1_650_750_200);

// ============================================================================================
echo PHP_EOL;

// Number: Float 
echo "Floating Point: ";
var_dump(1.234);

// E3 = 1000
echo "Floating Point dengan E notation Plus (1.2 x 1000): ";
var_dump(1.2e3);

// E-3 = 0.001
echo "Floating Point dengan E notation Minus (7 x 0.001): ";
var_dump(7e-3);

echo "Underscore di floating point: ";
var_dump(1_275.500);

// Integer Overflow 64 Bit
echo "Integer Overflow: ";
var_dump(9223372036854775808);