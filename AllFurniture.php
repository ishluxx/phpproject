<?php 

include_once "./Auth/config.php";
$tbody = '';
$num_rows = '';
$select = mysqli_query($conn,"SELECT * FROM furniture ");

    if ($select == true) {
        $num_row = mysqli_num_rows($select);
        if ($num_row > 0) {
            $a = 0;
            while ($fetch = mysqli_fetch_assoc($select)) {
                $a++;
                $tbody .=  '<tr>
                            <td>'.$a.'</td>
                            <td>'.$fetch['FurnitureName'].'</td>
                            <td>'.$fetch['FurnitureOwnerName'].'</td>
                            <td><a href="Import.php?id='.$fetch['FurnitureId'].'">Import</a></td> 
                            <td><a href="export.php?id='.$fetch['FurnitureId'].'">Export</a></td> 
                            <td><a href="Furnitureupdate.php?id='.$fetch['FurnitureId'].'">Update</a></td> 
                            <td><a href="Furnituredelete.php?id='.$fetch['FurnitureId'].'">Delete</a></td> 
                          </tr>';
            }
        }
        else{
            $tbody .= '<tr><td>No tasks found! create new one</td></tr>';
        }
    }else{
        echo "not selected";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/Allrecords.css">
</head>
<body>


    <h1>All items in Warehouse</h1>
    <div class="container">
        <table border="2px">
            <thead>
                <tr>
                    <th>N<sup>o</sup></th>
                <th>FurnitureName</th>
                <th>FurnitureOwnerName</th>
                <th colspan="4">ACTION</th>                

            </tr>
        </thead>
        <tbody>
            <?php
                echo $tbody;
                ?>
                <tr>
                    <td>total items:</td><td colspan="6"><?php  echo $num_row ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>