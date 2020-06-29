<?php
    include "../db.php";

    $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');

    $dag = $_POST['dag'];
    $tijd = $_POST['tijd'];
    $klas = $_POST['klas'];
    $activiteit = $_POST['activiteit'];
    $lokaal = $_POST['lokaal'];
    $docent = $_POST['docent'];

    $sql = "INSERT INTO rooster (dag, tijd, klas, activiteit, lokaal, docent) VALUES ('$dag', '$tijd', '$klas', '$activiteit', '$lokaal', '$docent')";
    mysqli_query($conn, $sql);
  
    mysqli_close($conn);

    header('Location: rooster.php');
?>