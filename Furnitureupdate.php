<?php
    include_once "./Auth/config.php";

    if (!isset($_GET['id'])) {
        header("location: dashboard.php");
    }
    $id = $_GET['id'];
$select = mysqli_query($conn ,"SELECT * FROM furniture WHERE FurnitureId ='{$id}'");
if($select == true){
  $fetch = mysqli_fetch_assoc($select);
  $form = '
  <form action="" method="POST">
        <div class="">
            <label for="">FurnitureName</label>
            <input type="text" name="FurnitureName" value="'.$fetch['FurnitureName'].'">
        </div>
        <div>
            <label for="">FurnitureOwnerName</label>
            <input type="text" name="FurnitureOwnerName" value="'.$fetch['FurnitureOwnerName'].'" >
        </div>
        <input name="update" type="submit" value="UPDATE" class="submit">
        <a href="./dashboard.php">Back to home </a>
    </form>';
}
if (isset($_POST['update'])) {
    $FurnitureName = $_POST['FurnitureName'];
    $FurnitureOwnerName = $_POST['FurnitureOwnerName'];
    $setupdate = mysqli_query($conn,"UPDATE furniture SET `FurnitureName` ='$FurnitureName', `FurnitureOwnerName` ='$FurnitureOwnerName' WHERE `FurnitureId` = '{$id}'");
    if ($setupdate == true) {
        header("Location: dashboard.php");
    }else{
        echo "not updated";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
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

            .pic img{
                width: 450px;
                height: 100%;
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
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
        <?php  echo $form ;?>
    </body>
</html>