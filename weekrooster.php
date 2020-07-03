<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="refresh" content="10; URL=index.php">
	<title>Narrowcasting</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<?php
		require "links.php";
	?>
</head>
<body>
<div class="customcontainer">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<h1 class="col title">WeekRooster</h1><h4 class="text-right col title" id="date"></h4>
			</div>
		</div>
	</div>
		<div class="row border-bottom">
			<div class="col-1">
				<h3>dag</h3>
			</div>
			<div class="col-1">
				<h3>tijd</h3>
			</div>
			<div class="col-1">
				<h3>klas</h3>
			</div>
			<div class="col-6">
				<h3>activiteit</h3>
			</div>
			<div class="col-1">
				<h3>lokaal</h3>
			</div>
			<div class="col-2">
				<h3>docent</h3>
			</div>
		</div>

		<?php
			include "showrooster.php";
		?>
	</div>
	<script type="text/javascript" src="js/date.js"></script>
</body>
</html>