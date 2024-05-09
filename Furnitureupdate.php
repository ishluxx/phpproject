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

    </head>
    <body>
        <?php  echo $form ;?>
    </body>
</html>