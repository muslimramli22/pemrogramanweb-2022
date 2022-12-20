<?php 
    $mahasiswa = [
        [
        "nama" => "Muslim",
        "nim" => 12345,
        "alamat" => "Medan",
        "gambar" => "muslim.jpg"
        ],
        [
            "nama" => "Adifa",
            "nim" => 12346,
            "alamat" => "Medan",
            "gambar" => "adifa.jpg"
            ]

    ]
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php 
   foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li style="list-style:none;">
            <img class="foto" src="<?= $mhs["gambar"]; ?>" alt="">  
        </li>
        <li>
            Nama : <?= $mhs["nama"]; ?>
        </li>
        <li>
            Nim : <?= $mhs["nim"]; ?>
        </li>
        <li>
            Alamat : <?= $mhs["alamat"]; ?>
        </li>
    </ul>
   <?php endforeach; ?>

</body>
</html>