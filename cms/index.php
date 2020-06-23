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
    <script src="../js/app.js"></script>
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
            <h1>Mededelingen</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMededeling">
                Mededeling toevoegen
            </button>
            <?php
                include "../db.php";
                $sql = "SELECT id, titel, tekst FROM mededelingen";
                $conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');
                $result = mysqli_query($conn, $sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<div class='card mt-2'><div class='card-body' data-id='".$row['id']."'><h1>".$row['titel']."</h1><p>".$row['tekst']."</p><button class=
                        'btn btn-danger' id='deleteBtn' onclick='deleteMededeling()'>Verwijder</button></div></div>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>