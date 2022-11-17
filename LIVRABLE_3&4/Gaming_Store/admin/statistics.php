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
    <link rel="stylesheet" href="../assets/css/statistics.css">
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
                        <a class="nav-link" aria-current="page" href="statistics.php">Statistiques</a>
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
    <h2 class="title"">Store statistics</h2>
    <div class="container align-content-center" style="margin-top:100px; margin-bottom:80px;">
        <div class="row sts">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="sts_h1">
                    <div class="img_h1">
                        <img src="../images/total_products.png" alt="" class="i_m_g">
                    </div>
                    <?php
                        $stmt = $conn->query("SELECT count(*) as 'nbr' FROM `product`");
                        if ($stmt->rowCount()>0) {
                        while($row = $stmt->fetch()){
                                echo '<h3>'.$row['nbr'].'</h3>';
                            }
                        } 
                    ?>
                    <p>Total Products</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="sts_h2">
                    <div class="img_h2">
                        <img src="../images/max.png" alt="" class="i_m_g">
                    </div>
                    <?php
                        $stmt = $conn->query("SELECT max(prix) as 'max' FROM `product`");
                        if ($stmt->rowCount()>0) {
                        while($row = $stmt->fetch()){
                                echo '<h3>'.$row['max'].'</h3>';
                            }
                        } 
                    ?>
                    <p>Max Price</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="sts_h3">
                    <div class="img_h3">
                        <img src="../images/min.png" alt="" class="i_m_g">
                    </div>
                    <?php
                        $stmt = $conn->query("SELECT min(prix) as 'min' FROM `product`");
                        if ($stmt->rowCount()>0) {
                        while($row = $stmt->fetch()){
                                echo '<h3>'.$row['min'].'</h3>';
                            }
                        } 
                    ?>
                    <p>Min Price</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="sts_h4">
                    <div class="img_h4">
                        <img src="../images/average.png" alt="" class="i_m_g">
                    </div>
                    <?php
                        $stmt = $conn->query("SELECT avg(prix) as 'avg' FROM `product`");
                        if ($stmt->rowCount()>0) {
                        while($row = $stmt->fetch()){
                                echo '<h3>'.$row['avg'].'</h3>';
                            }
                        } 
                    ?>
                    <p>Prices Average</p>
                </div>
            </div>
        </div>
    </div>