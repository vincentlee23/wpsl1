<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Registration</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        session_start();
        // var_dump($_POST);
        // var_dump($_FILES);
        $correct_input = false;
        $correct_input = validate();
        function validate(){
            if($_POST['namaDepan'] == ""){
                echo "Field Nama Depan can't be empty!";
                return false;
            }else if($_POST['namaTengah'] == ""){
                echo "Field Nama Tengah can't be empty!";
                return false;
            }else if($_POST['namaBelakang'] == ""){
                echo "Field Nama Belakang can't be empty!";
                return false;
            }else if($_POST['tempatLahir'] == ""){
                echo "Field Tempat Lahir can't be empty!";
                return false;
            }else if($_POST['tglLahir'] == ""){
                echo "Field Tanggal Lahir can't be empty!";
                return false;
            }else if($_POST['nik'] == ""){
                echo "Field NIK can't be empty!";
                return false;
            }else if($_POST['wargaNegara'] == ""){
                echo "Field Warga Negara can't be empty!";
                return false;
            }else if($_POST['email'] == ""){
                echo "Field Email can't be empty!";
                return false;
            }else if($_POST['noHp'] == ""){
                echo "Field No HP can't be empty!";
                return false;
            }else if($_POST['alamat'] == ""){
                echo "Field Alamat can't be empty!";
                return false;
            }else if($_POST['kodePos'] == ""){
                echo "Field Kode Pos can't be empty!";
                return false;
            }else if($_FILES['fotoProfil']['tmp_name'] == ""){
                echo "Foto Profil must be uploaded!";
                return false;
            }else if($_POST['username'] == ""){
                echo "Field Username can't be empty!";
                return false;
            }else if($_POST['password1'] == ""){
                echo "Field Password 1 can't be empty!";
                return false;
            }else if($_POST['password2'] == ""){
                echo "Field Password 2 can't be empty!";
                return false;
            }else if(is_numeric($_POST['namaDepan'])){
                echo "Nama Depan must not be numbers!";
                return false;
            }else if(is_numeric($_POST['namaTengah'])){
                echo "Nama Tengah must not be numbers!";
                return false;
            }else if(is_numeric($_POST['namaBelakang'])){
                echo "Nama Belakang must not be numbers!";
                return false;
            }else if(is_numeric($_POST['tempatLahir'])){
                echo "Tempat Lahir must not be numbers!";
                return false;
            }else if(!is_numeric($_POST['nik'])){
                echo "NIK must be numeric!";
                return false;
            }else if(is_numeric($_POST['wargaNegara'])){
                echo "Warga Negara must not be numbers!";
                return false;
            }else if(!str_ends_with($_POST['email'], "@gmail.com")){
                echo "Please enter a valid email!";
                return false;
            }else if(!is_numeric($_POST['noHp'])){
                echo "No HP must be numeric!";
                return false;
            }else if(!is_numeric($_POST['kodePos'])){
                echo "Kode Pos must be numeric!";
                return false;
            }else if($_POST['password1'] != $_POST['password2']){
                echo "Password 1 dan Password 2 must be the same!";
                return false;
            }
            return true;
        }

        if($correct_input){
            $_SESSION['namaDepan'] = $_POST['namaDepan'];
            $_SESSION['namaTengah'] = $_POST['namaTengah'];
            $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
            $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
            $_SESSION['tglLahir'] = $_POST['tglLahir'];
            $_SESSION['nik'] = $_POST['nik'];
            $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['noHp'] = $_POST['noHp'];
            $_SESSION['alamat'] = $_POST['alamat'];
            $_SESSION['kodePos'] = $_POST['kodePos'];
            $profileName = $_FILES['fotoProfil']['name'];
            $profileLoc = $_FILES['fotoProfil']['tmp_name'];
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password1'] = $_POST['password1'];
            $_SESSION['password2'] = $_POST['password2'];
            move_uploaded_file($profileLoc, "uploaded/".$profileName);
        }
    ?>
    
    <?php if($correct_input){?>
        <div class="successful-register">
            <p>Registration Successful!</p>
            <a href="./welcome.php">Back to Welcome Page</a>
        </div>
    <?php }?>
    </body>
</html>