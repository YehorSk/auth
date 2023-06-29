<?php


    session_start();
    require_once 'connect.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $pwd = md5($pwd);
        $check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$pwd'");
        if (mysqli_num_rows($check) > 0) {
            $user = mysqli_fetch_assoc($check);
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'avatar' => $user['avatar'],
                'email' => $user['email']
            ];
            header('Location: ../profile.php');

        } else {
            $_SESSION['wrong'] = true;
            header('Location: ../index.php?error=Error');
        }
    }

?>