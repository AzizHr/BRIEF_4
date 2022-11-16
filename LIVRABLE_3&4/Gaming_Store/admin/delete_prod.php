<?php 
    require_once '../php/database.php';
    
    $id=$_GET['id'];
    $stmt=$conn->prepare("DELETE FROM `product` WHERE ID=:id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    header("location:management.php");
    exit();

?>