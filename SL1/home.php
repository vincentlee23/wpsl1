<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="home-header">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <p style="border-bottom: 2px solid black">Home</p>
        <a href="./profile.php">Profile</a>
        <a href="./welcome.php">Logout</a><br>
    </div>
    
    <div class="home-content">
        <?php
            if(isset($_SESSION['namaDepan'])){
                echo "Halo!"."<strong>".$_SESSION['namaDepan']." ".$_SESSION['namaTengah']." ".
            $_SESSION['namaBelakang']."</strong>".", Selamat Datang di Aplikasi Pengelolaan Keuangan";
            }
        ?>
    </div>
    
</body>
</html>