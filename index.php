<?php
    session_start();
if(!isset($_SESSION['user'])){
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>PHP-Auth</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Type your email:">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" placeholder="Type your password:">
        <input type="submit" name="submit" class="login-btn" value="Submit">
        <p>
            Don't have an account? - <a href="register.php">Register here!</a>
        </p>
        <p class="msg none" style="color: gold;">Authorization is completed!</p>
    </form>
<script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php
    }else{
        header('Location: profile.php');
    }
        ?>
