<?php
    include "./Auth/config.php";

    if (isset($_POST['newrecord'])) {
        // $id = $_SESSION['ManagerId'];
        $Furniturename = $_POST['Furniturename'];
        $Furnitureownername = $_POST['Furnitureownername'];
        $sql = "INSERT INTO furniture(FurnitureName,FurnitureOwnerName) VALUES ('{$Furniturename}','{$Furnitureownername}')";
        $query = mysqli_query($conn,$sql);
        if ($query) {
                header("Location: dashboard.php");

        }
        else {
            echo "add fail";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <form action="" method="POST">
            <input type="text" name="Furniturename" placeholder="Furniture Name">
            <input type="text" name="Furnitureownername" placeholder="Furniture Owner Name">
            <input name="newrecord" type="submit" value="submit" class="submit">
    </form>
</body>
</html>