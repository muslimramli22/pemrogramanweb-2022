<?php 
    //koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "","phpdasar");
    //ambil data/query semua data di database
    $result= mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    //ambil data lebih spesifik
    //lakukan looping untuk mengambil semua data
//    while($mhs=  mysqli_fetch_assoc($result)) {

//        var_dump($mhs);
//    }

    $i=1;
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
    <table celpaddi="10"; border="1"; cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
        </tr>
        <?php while($mhs=  mysqli_fetch_assoc($result)): ?>
        <tr>
           <td><?= $i; ?></td>
           <td><?= $mhs["nrp"]; ?></td>
           <td><?= $mhs["nama"]; ?></td>
           <td><?= $mhs["email"]; ?></td>
           <td><?php echo $mhs["jurusan"] ?></td>
           <td><img src="img/<?php echo $mhs["gambar"];?>" width="40" alt=""></td> 
        </tr>
        <?php $i++; ?>
        <?php endwhile?>
    </table>
</body>
</html>