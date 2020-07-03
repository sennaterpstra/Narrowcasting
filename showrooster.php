<?php
    include "db.php";

    $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');
    $sql = "SELECT dag, tijd, klas, activiteit, lokaal, docent FROM rooster";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<div class='row border-bottom'><div class='col-1'><h3>".$row['dag']."</h3></div><div class='col-1'><h3>".$row['tijd']."</h3></div><div class='col-1'><h3>".$row['klas']."</h3></div><div class='col-6'><h3>".$row['activiteit']."</h3></div>
            <div class='col-1'><h3>".$row['lokaal']."</h3></div><div class='col-2'><h3>".$row['docent']."</h3></div></div>";
        }
    }
    mysqli_close($conn);
?>