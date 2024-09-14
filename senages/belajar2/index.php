<?php
// belajardua - PHP Dasar
// Sintaks Php

// Standar Output : mencetak sesuatu dilayar
// echo, print : mencetak isi variabel
// print_r : khusus digunakan mencetak isi array
// var_dump : melihat isi variabel

// Penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tetapi boleh mengandung angka
// $ : merupakan tampungan sebuah nilai atau untuk pemanggilan sebuah nilai
$nama = "Sena Imut";
echo "Hello, Nama Saya $nama";

// operator
// aritmatika
// example
// + - * / %
// $x = 10;
// $y = 5;
// echo $x + $y ;

// operator penggabung string / concatenation / concat
// .
// example
// $nama_depan = "Irma";
// $nama_belakang = "Sena";
// echo $nama_depan . " " . $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=
// example
// $x = 5;
// $y = +1;
// echo $x;
// $nama = "Irma";
// $nama .= " ";
// $nama .= "Sena";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==
// example
// var_dump(1 == "1");

// identitas
// ===, !==
// example 
// var_dump(1 === "1");

// operator logika 
// &&, ||, !
// example
// $x = 15;
// var_dump($x < 10 || $x % 3 == 0)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h2>Hello, Selamat Datang <?php echo $nama; ?></h2>
    <p><?php echo "Ini Adalah Paragraf"; ?></p>
    <!-- ini merupakan contoh dari PHP ada didalam HTML -->

    <?php
        echo "<h1>Hello, Selamat Datang Sena</h1>"
    ?>
    <!-- ini merupakan contoh untuk HTML ada didalam php -->
</body>
</html>
