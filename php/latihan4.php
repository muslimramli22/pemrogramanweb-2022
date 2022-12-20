<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.container {
    /* margin: auto;
    background-color:blueviolet ; */
}
table {
    margin: auto;
}

    </style>
</head>
<body>
    <div class="container">
    <table border="1" cellpadding ="10" cellspacing="0">
        <?php 
            for($i=1; $i<=10;$i++) : ?>

            <?php 
                if($i %2==1) : ?>
            
            <tr style="background-color: blue; color:aliceblue">
                <?php else : ?>
            <tr style="background-color: red; color:aliceblue">
            <?php endif; ?>
                   

                <?php 
                    for($j=1;$j<=5;$j++) : ?>
                    <td>
                        <?= $i, "-", $j; ?>
                    </td>

                    <?php endfor ?>
             
            </tr>
           
        <?php endfor ?>

    </table>
    </div>
</body>
</html>