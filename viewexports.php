<?php 
include_once "./Auth/config.php";
$tbody = '';
$num_rows = '';
$select = mysqli_query($conn,"SELECT * FROM exports INNER JOIN furniture ON exports.FurnitureId = furniture.FurnitureId ");
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
                            <td>'.$fetch['ExportDate'].'</td>
                            <td>'.$fetch['Quantity'].'</td>
                            <td><a href="exportfile/exportupdate.php?id='.$fetch['FurnitureId'].'">Update</a></td> 
                            <td><a href="exportfile/exportdelete.php?id='.$fetch['FurnitureId'].'">Delete</a></td> 
                          </tr>';
            }
        }
        else{
            $tbody .= '<tr><td>No Item is already Exported</td></tr>';
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
    <style>
                      table {
                border-spacing: 0;
                width: 100%;
            max-width: 830px;
                border: none;
            }
            
            th, td {
                text-align: left;
                padding: 16px;
            }
            
            tr:nth-child(even) {
                background-color: #f2f2f2
            }
            h1{
                text-align: center;
            }
            .container{
                margin-top: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgb(255, 255, 255);
            }
    </style>
</head>
<body>
	<?php include_once "insidenav.php"  ?>
    <h1>All items that were Exported from  Warehouse</h1>
    <div class="container">
        <table >
            <thead>
                <tr>
                <th>N<sup>o</sup></th>
                <th>FurnitureName</th>
                <th>FurnitureOwnerName</th>
                <th>ExportDate</th>
                <th>Quantity</th>
                <th colspan="3" style="text-align: center;">ACTION</th>                
                
            </tr>
        </thead>
        <tbody>
            <?php
                echo $tbody;
                ?>
                <tr>
                    <td>total items:</td><td colspan="7"><?php  echo $num_row ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include_once "footer.php"  ?>
</body>
</html>