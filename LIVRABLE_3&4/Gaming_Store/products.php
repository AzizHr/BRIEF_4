<?php 
require_once 'php/database.php';
require_once 'header.php';
?>
      <link rel="stylesheet" href="assets/css/cat.css">
      <div class="container first_cont">
        <div class="row">
            <div class="col-md-6">
                <img src="images/products_image.png" width="90%" height="500px">
            </div>
            <div class="col-md-6 div">
                <p class="par">Start browsing the best gaming materials now</p>
                <p class="par2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eum tenetur labore tempore aliquam officiis doloremque, maxime modi rerum.</p>
                <button type="button" id="browse" class="btn">Browse now</button>
            </div>
        </div>
      </div>
      <div class="categories">
          <div class="category" id="Computers">
              <p>Computers</p> 
          </div>
          <div class="category" id="Keyboards">
              <p>Keyboards</p> 
          </div>
          <div class="category" id="Mouses">
            <p>Mouses</p> 
          </div>
      </div>
      <div class="container ctr">
        <div class="row align-content-center">
          <?php
              if(isset($_GET['cat'])==false){
                $stmt = $conn->query("SELECT `ID`, `LIBELLE`, `QUANTITE`, `PRIX`, `IMAGE`, `ID_CAT` FROM `product`");
                if ($stmt->rowCount()>0) {
                  while($row = $stmt->fetch()){
                    echo 
                    ' <div class="col-lg-4 col-md-6 col-sm-12 product_con">
                      <div class="product">
                        <img height="250" width="200" src="images/'.$row['IMAGE'].'">
                        <h5 class="product_name">'.$row['LIBELLE'].'</h5>
                        <h4 class="product_price">'.$row['PRIX'].' $</h4>
                      </div>
                  </div>
                    ';
                  }
                } 

              }
              else{
                $stmt = $conn->query("SELECT `ID`, `LIBELLE`, `QUANTITE`, `PRIX`, `IMAGE`, p.`ID_CAT` FROM `product` p INNER join category on p.ID_CAT=category.ID_CAT and category.LIBELLE_CAT like '".$_GET['cat']."'");
                if ($stmt->rowCount()>0) {
                  while($row = $stmt->fetch()){
                    echo 
                    ' <div class="col-lg-4 col-md-6 col-sm-12 product_con">
                      <div class="product">
                        <img height="250" width="200" src="images/'.$row['IMAGE'].'">
                        <h5 class="product_name">'.$row['LIBELLE'].'</h5>
                        <h4 class="product_price">'.$row['PRIX'].' $</h4>
                      </div>
                  </div>
                    ';
                  }
                } 
              }
            ?>
        </div>
      </div>

      <script src="assets/js/script.js"></script>
<?php 
  require_once 'footer.php' 
?>


