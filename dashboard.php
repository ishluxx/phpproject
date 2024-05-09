<?php
include_once "./Auth/config.php";
if(!isset($_SESSION['ManagerId'])){
    header("Location: ./Auth/login.php");
}
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

	<?php include "nav.php"  ?>
	<div>
		<?php include "AllFurniture.php"  ?>
	</div>
</body>
</html>