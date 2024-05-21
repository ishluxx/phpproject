<?php 
include "./Auth/config.php";
$tbody = '';
$num_rows = '';
$select = mysqli_query($conn,"SELECT * ,COALESCE(imports.Quantity,0) AS TotalImported,       
                                        COALESCE(exports.Quantity,0) AS TotalExported 
                                        FROM furniture LEFT JOIN imports ON furniture.FurnitureId = imports.FurnitureId
                                                       LEFT JOIN exports ON furniture.FurnitureId = exports.FurnitureId ");
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
                            <td>'.$fetch['TotalExported']+ $fetch['TotalImported'].'</td>
                            <td>'.$fetch['TotalImported'].'</td>
                            <td>'.$fetch['TotalExported'].'</td>
                          </tr>';
            }
        }
        else{
            $tbody .= '<tr><td>No report to generate</td></tr>';
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
    <h1>All Furniture stored in Warehouse</h1>
    <div class="container">
        <table >
            <thead>
                <tr>
                <th>N<sup>o</sup></th>
                <th>FurnitureName</th>
                <th>FurnitureOwnerName</th>
                <th>ALLItemsFlows</th>                
                <th>RemainedItemQuantity</th>                
                <th>ExportedQuantity</th>                
            </tr>
        </thead>
        <tbody>
            <?php
                echo $tbody;
                ?>
                <tr>
                    <td>total items:</td><td colspan="5"><?php  echo $num_row ?></td>
                    <td><button class="btn1" onclick=printPage() >Print</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include_once "footer.php"  ?>
      <script>
        function printPage() {
            window.print();
        }
    </script>
</body>
</html>