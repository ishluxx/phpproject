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
                <input type="text" name="FurnitureName" value="'.$fetch['FurnitureName'].'" disabled>
            </div>
            <div class="">
                <input type="text" name="FurnitureOwnername" value="'.$fetch['FurnitureOwnerName'].'"disabled>
            </div>
            <div>
                <input type="date" name="ImportDate" >
            </div>
            <div>
                <input type="number" name="Quantity">
            </div>
            <input name="add" type="submit" value="Import" class="submit">
        </form>';
    }
    if (isset($_POST['add'])) {
        $id = $_GET['id'];
        $ImportDate = $_POST['ImportDate'];
        $Quantity = $_POST['Quantity'];
        $importdata = mysqli_query($conn,"INSERT INTO imports (FurnitureId,ImportDate,Quantity) VALUES('{$id}','{$ImportDate}','{$Quantity}')");
        if ($importdata == true) {
            // echo "Import is successfully dane!";
           header("location: viewImports.php");
        }else{
            echo"not imported";
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