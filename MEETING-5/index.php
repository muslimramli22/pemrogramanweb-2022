<?php 
        $mahasiswa = [
        [
            "gambar" => "muslim.jpg",
            "nama" => "Muslim Ramli",
            "Prodi" => "TRPL",
            "Domisili" => "Medan"
        ],
        [
            "gambar" => "septian.jpg",
            "nama" => "Septian Simatupang",
            "Prodi" => "TRPL",
            "Domisili" => "Deli Sedang"
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
</head>
<body>
            <?php 
                foreach($mahasiswa as $mhs) : ?>
            <ul>
        <li>
            Nama : <?= $mhs["nama"]; ?>
        </li>
    </ul>
    <?php endforeach ?>
    
</body>
</html>