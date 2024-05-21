<?php
    include "./Auth/config.php";

    if (!isset($_GET['id'])) {
        header("location: ../dashboard.php");
    }
    $id = $_GET['id'];
    $form = '';
   $select = mysqli_query($conn ,"SELECT * FROM imports  INNER JOIN furniture  ON  imports.FurnitureId = furniture.FurnitureId WHERE imports.FurnitureId = '{$id}'");
if($select  == true ){
  $fetch = mysqli_fetch_assoc($select);
  $form = '
  <form action="" method="POST">
        <div class="">
            <label for="">FurnitureName</label>
            <input type="text" name="FurnitureName" value="'.$fetch['FurnitureName'].'" disabled>
        </div>
        <div>
            <label for="">FurnitureOwnerName</label>
            <input type="text" name="FurnitureOwnerName" value="'.$fetch['FurnitureOwnerName'].'"  disabled>
        </div>
        <div>
        <label for="">ExportDate</label>
        <input type="date" name="ExportDate"  >
        </div>
        <div>
        <label for="">Quantity Imported</label>
        <input type="number" name="Quantity" value="'.$fetch['Quantity'].'" disabled >
        </div>
        <div>
        <label for="">Quantity To Export</label>
        <input type="number" name="ExportQuantity">
    </div>
        <input name="export" type="submit" value="EXPORT" class="submit">
        <h3 style ="text-align:center"><a href="./dashboard.php">Back to home </a></h3>
    </form>';
}else{
    echo "not found";
}
if (isset($_POST['export'])) {
    $ExportDate = $_POST['ExportDate'];
    $Quantity = $_POST['ExportQuantity'];
    $NewQuantity = $fetch['Quantity'] - $Quantity;
    $setupdate = mysqli_query($conn,"UPDATE imports SET  `Quantity` ='$NewQuantity' WHERE `FurnitureId` = '{$id}'");
    if ($setupdate == true) {
        $check = mysqli_query($conn,"SELECT * FROM exports WHERE FurnitureId = '{$id}'");
        if(mysqli_num_rows($check)>0){
            $fetch = mysqli_fetch_assoc($check);
            $Quantity = $_POST['ExportQuantity'];
            $ExportDate = $_POST['ExportDate'];
            $total_Q_export= $fetch['Quantity'] + $Quantity;
            $sql = mysqli_query($conn,"UPDATE exports SET ExportDate = '{$ExportDate}',Quantity = '{$total_Q_export}' WHERE FurnitureId = '{$id}' ");
            if ($sql == true) {
              header("location: viewImports.php");
            }
        }else{
            $sql= mysqli_query($conn,"INSERT INTO exports (FurnitureId,ExportDate,Quantity) VALUES('{$id}','{$ExportDate}','{$Quantity}') ");
            if ($sql == true) {
                header("location: viewexports.php");
            }
        }
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
        <?php 
        echo $form;
        ?>
    </body>
</html>