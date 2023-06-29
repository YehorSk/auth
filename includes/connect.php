<?php
    try{
        $host = 'localhost';
        $dbname = 'auth';
        $user = 'root';
        $pwd = '';
        $conn = mysqli_connect($host,$user,$pwd,$dbname);
    }catch (Exception $e){
        echo $e->getMessage();
        die();
    }
?>