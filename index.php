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
    <form action="includes/signin.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Type your email:">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" placeholder="Type your password:">
        <input type="submit" name="submit" value="Submit">
        <p>
            Don't have an account? - <a href="register.php">Register here!</a>
        </p>
        <?php
        if(isset($_SESSION['usercreated'])){
            echo '<p class="error" style="color: gold;">Authorization is completed!</p>';
            unset($_SESSION['usercreated']);
        }
        ?>
        <?php
        if(isset($_SESSION['wrong'])){
            echo '<p class="error" style="color: red;">Incorrect login or password!</p>';
            unset($_SESSION['wrong']);
        }
        ?>
    </form>
</body>
</html>
<?php
    }else{
        header('Location: profile.php');
    }
        ?>
