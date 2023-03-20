<?php
//Array Associative
//array yang indexnya adalah string yang kita buat sendiri
$mahasiswa = [
    ['nama' => 'Bima',
    'binatang' => '🐵',
    'makanan' => ['🍕', '🍿']],
    ['nama' => 'Dzikri',
    'binatang' => '🐷',
    'makanan' => ['🍜']],
    ['nama' => 'Kaka',
    'binatang' => '🐉',
    'makanan' => ['🍦']],
    ['nama' => 'Dicco',
    'binatang' => '🐍',
    'makanan' => ['🍟']],
    ['nama' => 'Zuhdi',
    'binatang' => '🐄',
    'makanan' => ['🍔']],
    ['nama' => 'Ariel',
    'binatang' => '🐈',
    'makanan' => ['🍗']]
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
    

<h2>Daftar Mahasiswa</h2>
<?php foreach($mahasiswa as $i) { ?>
<ul>

    <li>Nama: <?= $i["nama"]; ?></li>
    <li>Binatang Peliharaan: <?= $i["binatang"]; ?></li>
    <li>Makanan Favorit:
    <?php foreach ($i["makanan"] as $mkn) {?>
       <?= $mkn; ?>
       <?php } ?>
       

</li>
</ul>
<?php } ?>
</body>
</html>