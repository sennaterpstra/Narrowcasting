<?php
session_start();
require "../db.php";
// Connect to database.
$conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');

if ( !isset($_POST['username'], $_POST['password']) ) {
	// When there are empty fields.
	exit('Please fill both the username and password fields!');
}


if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exist, now check password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // When verification succeeded.
            // Create sessions to know the user is logged in.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: ../cms'); 
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }
    
	$stmt->close();
}
?>