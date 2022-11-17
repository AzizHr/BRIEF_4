<?php
    require_once '../php/database.php';
    
    $id=$_GET["id"];
    $libelle = $_GET["libelle"];
    $quantite = $_GET["quantite"];
    $prix = $_GET["prix"];
    $image = $_GET['image'];

    if($image == NULL){
        $query = $conn->prepare("UPDATE product SET LIBELLE = :L , QUANTITE = :Q , PRIX = :P WHERE ID=:id");
        $query->bindParam(":L" , $libelle);
        $query->bindParam(":Q" , $quantite);
        $query->bindParam(":P" , $prix);
        $query->bindParam(":id" , $id);
        $query->execute();
        header("location:management.php");
        exit();
    }else{
        $query = $conn->prepare("UPDATE product SET LIBELLE = :L , QUANTITE = :Q , PRIX = :P, IMAGE = :I WHERE ID=:id");
        $query->bindParam(":L" , $libelle);
        $query->bindParam(":Q" , $quantite);
        $query->bindParam(":P" , $prix);
        $query->bindParam(":I" , $image);
        $query->bindParam(":id" , $id);
        $query->execute();
        header("location:management.php");
        exit();
    }
?>