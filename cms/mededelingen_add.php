<?php
    include "../db.php";

    $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');

    $titel = $_POST['titel'];
    $tekst = $_POST['tekst'];

    $sql = "INSERT INTO mededelingen (titel, tekst) VALUES ('$titel', '$tekst')";
    mysqli_query($conn, $sql);
  
    mysqli_close($conn);

    header('Location: index.php');
?>