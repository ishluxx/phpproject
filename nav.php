<?php
include_once "./Auth/config.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navigation Bar</title>
    <link rel="stylesheet" href="./styles/dashboard.css">
</head>
<body>
	<nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="./dashboard.php">Calgo Warehouse</a> </div>
			<ul>
				<li><a href="./newrecord.php">New Records</a></li>
				<li><a href="./viewImports.php">Imports</a></li>
				<li><a href="./viewexports.php">Exports</a></li>
				<li><a href="./Allrecords.php">Allrecords</a></li>
                <button><a href="./auth/logout.php">Logout</a></button>
			</ul>
		</div>
	</nav>
	<div>
	</div>
</body>
</html>