<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Narrowcasting</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<?php
		require "links.php";
	?>
</head>
<body>
	<div class="row">
		<div class="col-12">
			<div class="row">
				<h1 class="col title">WeekRooster</h1><h4 class="text-right col title" id="date"></h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<!-- Weekrooster -->
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				      <th scope="col">Dag:</th>
				      <th scope="col">Tijd:</th>
				      <th scope="col">Klas:</th>
				      <th scope="col">Activiteit:</th>
				      <th scope="col">Lokaal:</th>
				      <th scope="col">Docent:</th>
				    </tr>
				</thead>
		 		<tbody>
		 			<?php
						include "rooster.php";
					?>
		  		</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="js/date.js"></script>
</body>
</html>