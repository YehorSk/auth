<?php
    session_start();
?>
<?php
    if(isset($_SESSION['user'])){

?>
        <html>
        <head>
            <link rel="stylesheet" href="assets/css/style.css">
            <title>Profile page</title>
        </head>
        <body>
            <form>
                <h2>Hello, <?=  $_SESSION['user']['name']?></h2>
                <h2>Email, <?=  $_SESSION['user']['email']?></h2>
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200px" height="200px" alt="">
                <a href="includes/logout.php">Logout</a>
            </form>
        </body>
        </html>

<?php
    }?>