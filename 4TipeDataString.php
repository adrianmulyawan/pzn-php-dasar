<?php

// Tipe Data String
// 1. Tipe data string adalah tipe data representasi dari teks
// 2. String bisa mengandung kosong atau banyak karakter

// Membuat string dengan Single Quote ('')
echo 'Nama: ';
echo 'Adrian Mulyawan';

// ==========================================================================================

// Membuat string dengan Double Quote ("")
// Dengan Double Quote kita bisa menggunakan escape sequence
// Enter: \n
// Tab: \t

echo "\n";

echo "Nama: ";
echo "Adrian\t Mulyawan \n";

// ===========================================================================================

// Multiline String
// Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai Enter
// Namun PHP memiliki fitur yang lebih baik, yaitu Heredoc dan Nowdoc

// 1. Heredoc (<<<)
// Fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual
echo <<<ADRIAN
Ini adalah contoh string yang sangat
panjang dengan menggunakan Heredoc, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
ADRIAN;

echo "\n";

// 2. Nowdoc (<<<''): mirip seperti Single Quote
// Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti Heredoc atau Double Quote.
echo <<<'ADRIAN'
Ini adalah contoh string yang sangat
panjang dengan menggunakan Nowdoc, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
ADRIAN;