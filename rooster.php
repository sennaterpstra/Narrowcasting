<?php
    include "db.php";

    $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');
    $sql = "SELECT dag, tijd, klas, activiteit, lokaal, docent FROM rooster";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><th scope='row'>".$row['dag']."</th><td>".$row['tijd']."</td><td>".$row['klas']."</td><td>".$row['activiteit']."</td><td>".$row['lokaal']."</td><td>".$row['docent']."</td>";
        }
    }
    mysqli_close($conn);
?>