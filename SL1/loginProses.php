<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        // var_dump($_POST);
        // echo "<br>";
        // var_dump($_SESSION);
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        check_login($username, $password);

        function check_login($username, $password){
            if($username == $_SESSION['username'] && $password == $_SESSION['password1']){
                header("location: ./home.php");
            }else{?> 
                <div class="unsuccessful-login">
                    Login Failed. <br>
                    <a href="./login.php">Login again</a>
                </div>
     <?php  }
        } ?>
     
</body>
</html>