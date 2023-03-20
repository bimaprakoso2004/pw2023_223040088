<?php 
$mahasiswa = [
    [
        "Nama" => "Bima Hafit Prakoso",
        "NRP" => "223040088",
        "Email" => "bima.223040088@mail.unpas.ac.id",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "1.jpg"
    ],
    [
        "Nama" => "Azizi Shafa Asadel",
        "NRP" => "223040148",
        "Email" => "zeejkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "2.jpg"
    ],
    [
        "Nama" => "Angelina Christy",
        "NRP" => "223040248",
        "Email" => "christyjkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "3.jpg"
    ],
    [
        "Nama" => "Jessica Chandra",
        "NRP" => "223040348",
        "Email" => "jessijkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "4.jpg"
    ],
    [
        "Nama" => "Reva Fidela",
        "NRP" => "223040448",
        "Email" => "adeljkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "5.jpg"

    ],
    [
        "Nama" => "Shania Gracia",
        "NRP" => "223040548",
        "Email" => "graciajkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "6.jpg"
    ],
    [
        "Nama" => "Mutiara Azzahra",
        "NRP" => "223040648",
        "Email" => "muthejkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "7.jpg"
    ],
    [
        "Nama" => "Shani Indira Natio",
        "NRP" => "223040748",
        "Email" => "shanijkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "8.jpg"
    ],
    [
        "Nama" => "Jinan Safa Safira",
        "NRP" => "223040948",
        "Email" => "jinanjkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "9.jpg"
    ],
    [
        "Nama" => "Flora Shafiqa Riyadi",
        "NRP" => "223041048",
        "Email" => "florajkt48@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "10.jpg"
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $m) : ?>

        <ul>
            <li>
                <img src="img/<?=$m["Gambar"]; ?>">
            </li>
            <li>Nama : <?=$m["Nama"]; ?></li>
            <li>NRP : <?=$m["NRP"]; ?></li>
            <li>Email : <?=$m["Email"]; ?></li>
            <li>Jurusan : <?=$m["Jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>