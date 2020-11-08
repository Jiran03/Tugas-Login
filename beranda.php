<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if(empty($_POST['nama']) || empty($_POST['email'])){
            header("Location: error.php");
        }else{
            echo "Nama: ".$_POST['nama']."<br>";
            echo "Email: ".$_POST['email']."<br>";
            echo "Jam: ".$_POST['jam']."<br>";
            echo "Tanggal: ".$_POST['tanggal']."<br>";
        }
        
    ?>
    <br>
    <a href="./login.html">Kembali</a>

</body>
</html>