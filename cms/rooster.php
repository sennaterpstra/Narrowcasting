<?php
    // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ../login');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <?php
        require "../links.php";
        require "modals.php";
    ?>
</head>
<body>
    <div class="row h-100">
        <div class="col-3 shadow">
            <?php
                require "navbar.php";
            ?>
        </div>
        <div class="col-9">
            <!-- Content -->
            <h1>Rooster</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addActiviteit">Activiteit toevoegen</button>
            <?php
                include "../db.php";

                $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');
                $sql = "SELECT dag, tijd, klas, activiteit, lokaal, docent, id FROM rooster";
                $result = mysqli_query($conn, $sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<div class='row'><div class='col-1'><h3>".$row['dag']."</h3></div><div class='col-1'><h3>".$row['tijd']."</h3></div><div class='col-1'><h3>".$row['klas']."</h3></div><div class='col-5'><h3>".$row['activiteit']."</h3></div>
                        <div class='col-1'><h3>".$row['lokaal']."</h3></div><div class='col-2'><h3>".$row['docent']."</h3></div><div class='col-1' data-id='".$row['id']."'><button class='btn btn-danger deleteactiviteit'><i class='fas fa-times'></i></button></div></div>";
                    }
                }
                mysqli_close($conn);
            ?>
        </div>
    </div>
    <script src="../js/app.js"></script>
</body>
</html>