<?php
    require_once '../php/database.php';
    $libelle = $_POST["libelle"];
    $quantite = $_POST["quantite"];
    $prix = $_POST["prix"];
    $image = $_FILES['image']['name'];

    if($image==null){
        $query = $conn->prepare("UPDATE product SET LIBELLE = :L , QUANTITE = :Q , PRIX = :P WHERE ID=:id");
        $query->bindParam(":L" , $libelle);
        $query->bindParam(":Q" , $quantite);
        $query->bindParam(":P" , $prix);
        $query->bindParam(":id" , $_SESSION["ID"]);
        $query->execute();
        header("location:management.php");
        exit();
    }else{
        $query = $conn->prepare("UPDATE product SET LIBELLE = :L , QUANTITE = :Q , PRIX = :P, IMAGE = :I WHERE ID=:id");
        $query->bindParam(":L" , $libelle);
        $query->bindParam(":Q" , $quantite);
        $query->bindParam(":P" , $prix);
        $query->bindParam(":I" , $image);
        $query->bindParam(":id" , $_SESSION["ID"]);
        $query->execute();
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/$image");
        header("location:management.php");
        exit();
    }
?>