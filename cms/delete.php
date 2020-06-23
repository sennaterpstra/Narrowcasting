<?php
    require "../db.php";
    $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');
    $id = $_POST['id'];
?>