<?php
    // DATE
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y"); 
    // menggunakan l akan menampilkan hari
    // menggunakan d akan menampilkan tanggal
    // menggunakan M akan menampilkan bulan
    // menggunakan Y akan menampilkan tahun
    // menggunakan m akan menampilkan bulan dalam angka

    // TIME
    // UNIX timestamp/ EPOCH time
    // detik yg sudah berlalu sejak 1 Janari 1970
    // echo time();

    // echo date ("d M Y", time ()+60*60*24*1);
    // untuk menghitung hari
    // dihitung dengan detik akhir

    // MKTIME
    // membuat detik sendiri
    // mktime (0,0,0,0,0,0,0,)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date ("l", mktime (0,0,0,4,11,2006));

    // STRTOTIME
    // echo date ("l", strtotime ("11 apr 2006"));

?>