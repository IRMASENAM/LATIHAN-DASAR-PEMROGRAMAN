<?php
$mahasiswa = [["Irma Sena", "230202084", "Teknik Informatika", 
                "irmaashe@gmail.com"],
            ["Rizqi", "230202087", "Teknik Informatika", 
                "studyrizqi@gmail.com"],
            ["Indra", "230202083", "Teknik Informatika", 
                "indraajiyanto@gmail.com"]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $siswa) : ?>
    <ul>
        <li>Nama : <?= $siswa [0]; ?></li>
        <li>NPM : <?= $siswa [1]; ?></li>
        <li>Prodi : <?= $siswa [2]; ?></li>
        <li>Email : <?= $siswa [3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>