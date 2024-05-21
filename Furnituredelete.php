<?php
    include_once "./Auth/config.php";
    if (!isset($_GET['id'])) {
        header("location: dashboard.php");
    }
    $id = $_GET['id'];
    $deleteimport = mysqli_query($conn ,"DELETE FROM imports WHERE FurnitureId ='{$id}'");
   if ($deleteimport == true)  {
        $deleteexports= mysqli_query($conn ,"DELETE FROM exports WHERE FurnitureId ='{$id}'");
        if ($deleteexports == true) {
            $deletefurniture= mysqli_query($conn ,"DELETE FROM furniture WHERE FurnitureId ='{$id}'");
            if ($deletefurniture == true) {
                header("location:dashboard.php");
            }
       }
   }
  
?>