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
<form action="includes/signup.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Type your name:">
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Type your email:">
    <label for="img">Profile picture:</label>
    <input type="file" name="img" >
    <?php
    if(isset($_SESSION['imgerror'])){
        echo '<p class="error" style="color: red;">Something is wrong with your image!</p>';
        unset($_SESSION['imgerror']);
    }
    ?>
    <label for="pwd">Password:</label>
    <input type="password" name="pwd" placeholder="Type your password:">
    <label for="pwd">Password repeat:</label>
    <?php
    if(isset($_SESSION['pwdnm'])){
        echo '<p class="error" style="color: red;">Passwords not match!</p>';
        unset($_SESSION['pwdnm']);
    }
    ?>
    <input type="password" name="pwd_r" placeholder="Repeat your password:">
    <input type="submit" name="submit" value="Submit">
    <p>
        Already have an account? - <a href="index.php">Login here!</a>
    </p>





</form>
</body>
</html>
<?php
    }else{
        header('Location: profile.php');
    }
        ?>