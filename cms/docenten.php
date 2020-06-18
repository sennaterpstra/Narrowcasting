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
            <h1>Docenten</h1>
        </div>
    </div>
</body>
</html>