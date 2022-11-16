<?php
    require_once '../php/database.php';
    
    $id=$_POST["id"];
    // $libelle = $_POST["libelle"];
    // $quantite = $_POST["quantite"];
    // $prix = $_POST["prix"];
    // $image = $_FILES['image']['name'];

    // $query = $conn->prepare("UPDATE product SET LIBELLE = :L , QUANTITE = :Q , PRIX = :P, IMAGE = :I WHERE ID=:id");
    // $query->bindParam(":L" , $libelle);
    // $query->bindParam(":Q" , $quantite);
    // $query->bindParam(":P" , $prix);
    // $query->bindParam(":I" , $image);
    // $query->bindParam(":id" , $id);
    // $query->execute();
    // header("location:management.php");
    // exit();
    echo $id.'<br>';
    // echo $libelle.'<br>';
    // echo $quantite.'<br>';
    // echo $prix.'<br>';
    // echo $image.'<br>';
?>