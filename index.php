<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="refresh" content="10; URL=weekrooster.php">
	<title>Narrowcasting</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<?php
		require "links.php";
	?>
</head>
<body>
	<div class="row h-100">
		<div class="col-9">
			<div class="container">
				<!-- Mededelingen -->
				<h1>Mededelingen</h1><br>
				<?php
					include "db.php";
					$sql = "SELECT titel, tekst FROM mededelingen";
					$conn = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_dbname) or die('try again in some minutes, please');
					$result = mysqli_query($conn, $sql);
	
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo "<div class='card mt-2'><div class='card-body'><h1>".$row['titel']."</h1><p>".$row['tekst']."</p></div></div>";
						}
					}
				?>
			</div>
		</div>
		<div class="col-3">
			<a href="cms">
				<img src="assets/logo.jpg" class="logo">
			</a>
			<!-- Docenten Aanwezig -->
			<h4>Docenten aanwezig:</h4>
			<h4 class="dateplace" id="date"></h4>
		</div>
	</div>
	<script type="text/javascript" src="js/date.js"></script>
</body>
</html>