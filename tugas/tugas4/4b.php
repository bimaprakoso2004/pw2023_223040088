<?php
    $perangkat = [ 'Motherboard', 'Processor', 'Hard Disk', 'Pc Coller', 'VGA Card', 'SSD' ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4B</title>
</head>
<body>
    <h2>Macam - macam Perangkat Keras Komputer</h2>
    <ol>
        <?php foreach ($perangkat as $p) { ?>
        <li><?=$p; ?></li>
        <?php } ?>
    </ol>

    <h2>Macam - macam Perangkat Keras Komputer Baru</h2>
    <ol>
        <?php
        array_push($perangkat, "Card Reader", "Modem");
        sort($perangkat);
        ?>
        <?php foreach ($perangkat as $p) { ?>
        <li><?=$p; ?></li>
        <?php } ?>
    </ol>
</body>
</html>