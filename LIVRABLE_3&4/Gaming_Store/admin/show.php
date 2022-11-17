<?php 
  require_once '../php/database.php';

$_SESSION["ID"] = $_GET['id'];
$stmt=$conn->prepare("SELECT LIBELLE , QUANTITE , PRIX , IMAGE FROM `product` WHERE ID=:id");
$stmt->bindParam(':id',$_SESSION["ID"]);
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while($row=$stmt->fetch()){
    $libelle1 = $row["LIBELLE"];
    $quantite1 = $row["QUANTITE"];
    $prix1 = $row["PRIX"];
    $image1 = $row["IMAGE"];
}
}
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
<link rel="stylesheet" href="../assets/css/update_product.css">
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
    <form method="GET" action="update.php" enctype="multipart/form-data">
    <div class="container add">
        <h2 class="text-center">Update a Product</h2>
        <div style="width: 160px; height:160px; align-self: center;"><img src="../images/<?php echo $image1 ?>" alt="" style="width: 100%; height:100%;"></div>
        <div>
            <label for="libelle" class="form-text">Name</label>
            <input type="text" name="libelle" class="form-control" value="<?php echo $libelle1; ?>">
        </div>
        <div>
            <label for="quantite" class="form-text">Quantite</label>
            <input type="text" name="quantite" class="form-control" value="<?php echo $quantite1; ?>">
        </div>
        <div>
            <label for="prix" class="form-text">Price</label>
            <input type="text" name="prix" class="form-control" value="<?php echo $prix1; ?>">
        </div>
        <div>
        <label for="image" class="form-text">Update product image</label>
        <input type="file" name="image" class="form-control">
        </div>
        <div class="btns">
            <button class="btn btn-warning">Cencel</button>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
    </form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>