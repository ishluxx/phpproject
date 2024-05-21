<?php
    include "./Auth/config.php";
    $err = "";
    if (isset($_POST['newrecord'])) {
        $Furniturename = $_POST['Furniturename'];
        $Furnitureownername = $_POST['Furnitureownername'];
        $check = mysqli_query($conn,"SELECT * FROM furniture WHERE FurnitureName = '{$Furniturename}'AND FurnitureOwnerName = '{$Furnitureownername}' ");
        $err = ".<h2 style ='text-align:center'>  Item is already in store.</h2>";
        if ($check->num_rows > 0) { 

        }else{
            $sql = "INSERT INTO furniture(FurnitureName,FurnitureOwnerName) VALUES ('{$Furniturename}','{$Furnitureownername}')";
            $query = mysqli_query($conn,$sql);
            if ($query) {
                header("Location: dashboard.php");
                
            }
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
    <style>

            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: rgb(255, 255, 255);
            }
            .container{
                width: 100%;
                display: flex;
                max-width: 830px;
                background: #fff;
                border-radius: 15px;
                border: 1px solid black;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            }
            .login{
                width: 400px;
            }
            form{
                width: 250px;
                margin: 60px auto;
            }
            h1{
                margin: 20px;
                text-align: center;
                font-weight: bolder;
                text-transform: uppercase;
            }

            p{
                text-align: center;
                margin: 10px;
            }
            hr{
                border-top: 2px solid tomato;
            }

            input{
                width: 100%;
                margin: 2px;
                margin-bottom: 20px;
                border: none;
                outline: none;
                padding: 8px;
                border-radius: 5px;
                border: 1px solid gray;
            }
            .submit{
                position: relative;
                left: 10px;
                border: none;
                outline: none;
                padding: 8px;
                width: 252px;
                color: #fff;
                font-size: 16px;
                cursor: pointer;
                margin-top: 20px;
                margin-bottom: 20px;
                border-radius: 15px;
                background: gray;
            }
            .submit:hover{
                background: rgba(214, 86, 64, 1);
            }
            p{
                margin: 20px;
            }
            a{
                color: tomato;
                text-decoration: none;
            }
            .signup-login{
            margin-top: 5px;
            padding-left: 5px;
            }
    </style>
</head>
<body>
    <form action="" method="POST">
            <?php echo $err ?>
            <input type="text" name="Furniturename" placeholder="Furniture Name">
            <input type="text" name="Furnitureownername" placeholder="Furniture Owner Name">
            <input name="newrecord" type="submit" value="submit" class="submit">
            <a href="./dashboard.php">Back to home </a>
    </form>

</body>
</html>