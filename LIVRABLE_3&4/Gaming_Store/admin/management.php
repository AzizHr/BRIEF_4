<?php 
  require_once '../php/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
              <a class="navbar-brand" href="#" style="font-weight: bold;">
                <img src="../images/logo.svg" alt="" width="40" height="40">
                Gaming <span style="color: #4B47FC;">Store</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="#">Statistiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="management.php">Management</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo $_SESSION['name']; ?> </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="deconnecter.php">Déconnecter</a></li>
                          </ul>
                        </li> 
                    </ul>
              </div>
            </div>
          </nav>
    <div class="container mt-5 justify-content-center">
        <table class="table">
            <thead>
                <th><p class="text-center">Image</p></th>
                <th><p class="text-center">Id</p></th>
                <th><p class="text-center">Libelle</p></th>
                <th><p class="text-center">Quantite</p></th>
                <th><p class="text-center">Prix</p></th>
                <th><p class="text-center">Opeartion</p></th>
            </thead>
            <?php
                $stmt = $conn->query("SELECT `ID`, `LIBELLE`, `QUANTITE`, `PRIX`, `IMAGE` FROM `product`");
                if ($stmt->rowCount()>0) {
                  while($row = $stmt->fetch()){
                    echo 
                    '
                        <tr>
                        <td><p class="text-center"><img height="120" width="120" src="../images/'.$row['IMAGE'].'"></p></td>
                        <td><p class="text-center">'.$row['ID'].'</p></td>
                        <td><p class="text-center">'.$row['LIBELLE'].'</p></td>
                        <td><p class="text-center">'.$row['QUANTITE'].'</p></td>
                        <td><p class="text-center">'.$row['PRIX'].' $</p></td>
                        <td>
                            <form method="POST">
                            <button name="delete" class="btn btn-danger" value='.$row['ID'].'>Delete</button>
                            <button name="update" class="btn btn-primary" value='.$row['ID'].'>Update</button>
                            </form>
                        </td>
                        </tr>
                    ';
                    if(isset($_POST["delete"])){
                        $ID = $row['ID'];
                        $delete = $conn->prepare("DELETE FROM product WHERE ID = :ID");
                        $delete->bindParam("ID" , $ID);

                        if($delete->execute()){
                            echo '<div class="container alert alert-success" role="alert">
                                    A Product has been deleted successfully!
                                </div>';
                        }
                        else{
                            echo '<div class="container alert alert-danger" role="alert">
                                    A Product has not been deleted!
                                </div>';
                        }
                    }
                  }
                } 

                if(isset($_POST["update"])){
                    header("Location:../update_product.php");
                }
            ?>
           
        </table>

        <div class="container d-flex justify-content-center pb-5">
            <form method="POST" action="add_product.php">
            <button type="submit" class="btn btn-success" name="add">Ajouter</button>
            </form>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>