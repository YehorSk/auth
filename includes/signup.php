<?php

    session_start();
    require_once 'connect.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $pwd_r = $_POST['pwd_r'];

        if ($pwd === $pwd_r) {
            $path = 'uploads/' . time() . $_FILES['img']['name'];
            if (!move_uploaded_file($_FILES['img']['tmp_name'], '../' . $path)) {
                $_SESSION['imgerror'] = true;
                header('Location: ../register.php?error=Error');
            }
            $pwd = md5($pwd);
            mysqli_query($conn, "INSERT INTO `users` (`name`, `email`, `password`, `avatar`) 
                                        VALUES ('$name', '$email', '$pwd', '$path')");
            $_SESSION['usercreated'] = true;
            header('Location: ../index.php?error=UserCreated');

        } else {
            $_SESSION['pwdnm'] = true;
            header('Location: ../register.php?error=Error');
        }
    }

?>