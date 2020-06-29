<?php
    require "../db.php";
    $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');
    $id = $_GET['id'];
    $sql = "DELETE from rooster WHERE id='$id'";
    $conn->query($sql);

    header('location: rooster.php');
?>