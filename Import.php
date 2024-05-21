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
                <input type="text" name="FurnitureName" value="'.$fetch['FurnitureName'].'" disabled>
            </div>
            <div class="">
            <label for="">FurnitureOwnerName</label>
                <input type="text" name="FurnitureOwnername" value="'.$fetch['FurnitureOwnerName'].'"disabled>
            </div>
            <div>
            <label for="">Date</label>
                <input type="date" name="ImportDate" >
            </div>
            <div>
            <label for="">Quantity To Import</label>
                <input type="number" name="Quantity">
            </div>
            <input name="add" type="submit" value="Import" class="submit">
           <a href="./dashboard.php">Back to home </a>
        </form>';
    }
    if (isset($_POST['add'])) {
        $id = $_GET['id'];
        $ImportDate = $_POST['ImportDate'];
        $Quantity = $_POST['Quantity'];
        $check = mysqli_query($conn,"SELECT * FROM imports WHERE FurnitureId = '{$id}'");
        if(mysqli_num_rows($check )>0){
            $fetch = mysqli_fetch_assoc($check);
            $ImportDate = $_POST['ImportDate'];
            $NewQuantity = $fetch['Quantity'] + $Quantity;
          $sql = mysqli_query($conn,"UPDATE imports SET ImportDate = '{$ImportDate}',Quantity = '{$NewQuantity}' WHERE FurnitureId = '{$id}' ");
          if ($sql == true) {
            header("location: viewImports.php");
          }
        }else{
            $importdata = mysqli_query($conn,"INSERT INTO imports (FurnitureId,ImportDate,Quantity) VALUES('{$id}','{$ImportDate}','{$Quantity}')");
            if ($importdata == true) {
                // echo "Import is successfully dane!";
                header("location: viewImports.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
           
            .container{
                width: 100%;
                display: flex;
                max-width: 830px;
                background: #fff;
                border-radius: 15px;
                border: 1px solid black;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            }
           
            form{
                width: 250px;
                margin: 60px auto;
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

        </style>
    </head>
    <body>
        <?php  echo $form ;?>
    </body>
</html>