<?php
    session_start();
    require_once 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $pwd_r = $_POST['pwd_r'];

        if($pwd === $pwd_r){
            $path =
        }else{
            $_SESSION['pwdnm'] = true;
            header('Location: ../register.php?error=Error');
        }
    }
?>