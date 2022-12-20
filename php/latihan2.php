<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="
    .css">
</head>
<body>
    <?php echo date("F j, Y, g:i a"); 
    ?>
    <br>
    <?php 
    // echo time();
    // echo date("l", time()-60*60*24*100)
    echo date ("l", mktime(0,0,0,6,22,1990));
    //jam, menit, detik, bulan, tanggal, tahun 
    
    ?>
    <br>
    <?php 
    echo date("l", strtotime("22 june 1990"))
    ?>
</body>
</html>