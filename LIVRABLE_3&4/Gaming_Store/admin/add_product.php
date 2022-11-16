<?php 
require_once '../php/database.php' ;
require_once 'header.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/add_product.css">
</head>
<body>
    <?php 

        if(isset($_POST["save"])){
            $libelle = $_POST["libelle"];
            $quantite = $_POST["quantite"];
            $prix = $_POST["prix"];

            $query = $conn->prepare("INSERT INTO product (LIBELLE , QUANTITE , PRIX)  VALUES (:L , :Q , :P)");
            $query->bindParam("L" , $libelle);
            $query->bindParam("Q" , $quantite);
            $query->bindParam("P" , $prix);

            if($query->execute()){
                echo '<div class="alert alert-success" role="alert">
                A Product has been added successfully!
              </div>';
            }
            else{
                echo '<div class="alert alert-success" role="alert">
                A Product has not been added!
              </div>';
            }

        }
    
    ?>
    <div class="container add">
        <h2 class="text-center">Add a Product</h2>
        <form method="POST">
        <div>
            <label for="libelle" class="form-text">Name</label>
            <input type="text" name="libelle" class="form-control">
        </div>
        <div>
            <label for="quantite" class="form-text">Quantite</label>
            <input type="text" name="quantite" class="form-control" valu>
        </div>
        <div>
            <label for="prix" class="form-text">Price</label>
            <input type="text" name="prix" class="form-control">
        </div>
        <label for="image" class="form-text">Update product image</label>
        <input type="file" name="image" class="form-control">
        </div>
        <div class="btns">
            <button class="btn btn-warning" name="cencel">Cencel</button>
            <button class="btn btn-success" name="save">Save</button>
        </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>