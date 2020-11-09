<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        include "user.php";
        $day = date('l', strtotime($_POST['tanggal'])); 
        $hari = array(
            'Monday'  => 'Senin',
            'Tuesday'  => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
            'Sunday' => 'Minggu'
            );

        if(empty($_POST['nama']) || empty($_POST['email'])){
            header("Location: error_tdkLengkap.php");
        }
        elseif(($_POST['nama']!= $username) || ($_POST['email']!= $email)){
            header("Location: error_bknUser.php");
        }
        else{
            echo "Nama: ".$_POST['nama']."<br>";
            echo "Email: ".$_POST['email']."<br>";
            echo "Jam: ".$_POST['jam']."<br>";
            echo "Hari/Tanggal: ".$hari[$day].", ".date('d-m-Y', strtotime($_POST['tanggal']))."<br>";
        }
        
    ?>
    <br>
    <a href="./login.php">Kembali</a>

</body>
</html>