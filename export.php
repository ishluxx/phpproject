<?php
    include_once "./Auth/config.php";

    if (!isset($_GET['id'])) {
        header("location: AllFurniture.php");
    }

    $id = $_GET['id'];
    $select = mysqli_query($conn ,"SELECT * FROM furniture WHERE FurnitureId ='{$id}'");

    if($select == true){
    $fetch = mysqli_fetch_assoc($select);
    $form = '
    <form action="" method="POST">
            <div class="">
                <input type="text" name="FurnitureName" value="'.$fetch['FurnitureName'].'">
            </div>
            <div>
                <input type="date" name="ExportDate" >
            </div>
            <div>
                <input type="number" name="Quantity">
            </div>
            <input name="add" type="submit" value="Export" class="submit">
        </form>';
    }
    if (isset($_POST['add'])) {
        $id = $_GET['id'];
        $ExportDate = $_POST['ExportDate'];
        $Quantity = $_POST['Quantity'];
        $importdata = mysqli_query($conn,"INSERT INTO exports (FurnitureId,ExportDate,Quantity) VALUES('{$id}','{$ExportDate}','{$Quantity}')");
        if ($importdata == true) {
           header("location: dashboard.php");
        }else{
            echo"not not exported";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <?php  echo $form ;?>
    </body>
</html>