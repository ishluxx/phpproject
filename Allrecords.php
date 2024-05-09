<?php 

include_once "./Auth/config.php";
$tbody = '';
$num_rows = '';
$select = mysqli_query($conn,"SELECT * FROM furniture INNER JOIN imports ON furniture.FurnitureId = imports.FurnitureId INNER JOIN exports ON furniture.FurnitureId = exports.FurnitureId ");

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
                            <td>'.$fetch['ImportDate'].'</td>
                            <td>'.$fetch['Quantity'].'</td>  
                            <td>'.$fetch['ExportDate'].'</td>
                            <td>'.$fetch['Quantity'].'</td>  
                          </tr>';
            }
        }
        else{
            $tbody .= '<tr><td>No Item is already Imported</td></tr>';
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
	<?php include "nav.php"  ?>
    <h1>All records in  Warehouse</h1>
    <div class="container">
        <table border="2px">
            <thead>
                <tr>
                    <th>N<sup>o</sup></th>
                <th>FurnitureName</th>
                <th>FurnitureOwnerName</th>
                <th>ImportDate</th>
                <th>Quantity</th>
                <th>Exportdate</th>
                <th>Quantity</th>
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