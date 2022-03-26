<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="home-header">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <a href="./home.php">Home</a>
        <p style = "border-bottom: 2px solid black">Profile</p>
        <a href="./welcome.php">Logout</a><br>
    </div>
    
    <div class="profile-content">
        <div class="profile-content-title">
            <b>Profil Pribadi</b>
        </div>
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><?php echo "<b>".$_SESSION['namaDepan']."</b>"?></td>
                <td>Nama Tengah</td>
                <td><?php echo "<b>".$_SESSION['namaTengah']."</b>"?></td>
                <td>Nama Belakang</td>
                <td><?php echo "<b>".$_SESSION['namaBelakang']."</b>"?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo "<b>".$_SESSION['tempatLahir']."</b>"?></td>
                <td>Tgl Lahir</td>
                <td><?php echo "<b>".$_SESSION['tglLahir']."</b>"?></td>
                <td>NIK</td>
                <td><?php echo "<b>".$_SESSION['nik']."</b>"?></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><?php echo "<b>".$_SESSION['wargaNegara']."</b>"?></td>
                <td>Email</td>
                <td><?php echo "<b>".$_SESSION['email']."</b>"?></td>
                <td>No HP</td>
                <td><?php echo "<b>".$_SESSION['noHp']."</b>"?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo "<b>".$_SESSION['alamat']."</b>"?></td>
                <td>Kode Pos</td>
                <td><?php echo "<b>".$_SESSION['kodePos']."</b>"?></td>
                <td>Foto Profil</td>
                <td><img src="./Uploaded/cetak (1).JPG" alt="profile pic"></td>
            </tr>
        </table>
    </div>
</body>
</html>