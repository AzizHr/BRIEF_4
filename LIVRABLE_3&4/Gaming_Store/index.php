<?php 
require_once 'header.php' 
?>
      <style>
        .user-reviews{
          margin-top:160px;
          padding-bottom:100px;
        }
        .reviews-row{
          display:flex;
          row-gap:60px;
        }
        .review{
          display:flex;
          align-items:center;
          justify-content:center;
          column-gap:20px;
        }
        .review .r-info{
          display:flex;
          flex-direction:column;
          align-items:center;
          justify-content:center;
          margin-top:50px;
        }
        .r-img{
          width: 80px;
          height: 80px;
          border-radius: 90px;
        }
        .r-img img{
          width: 100%;
          border-radius: 90px;
        }
      </style>
      <div class="GS container justify-content-center mt-5">
        <h2 class="gaming">Gaming</h2> <div class="store"><h2>Store</h2></div>
      </div>

      <div id="carouselExampleSlidesOnly" class="carousel slide container mt-5" data-bs-ride="carousel">
        <div class="carousel-inner s">
          <div class="carousel-item active">
            <img src="images/gaming_slide1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/gaming_slide2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/gaming_slide3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

      <div class="container container1">
        <h2 class="h1">Sell Powerfull Gaming Materials From Computers To Mouses</h2>
        <button class="discover_now">Discover Now</button>
      </div>

      <div class="container ctr">
        <div class="row align-content-center">
          <div class="col-lg-4 col-md-6 col-sm-12 product_con">
            <div class="product">
              <img src="images/computer1.jpg" alt="">
              <h5 class="product_name">PC GAMER 1</h5>
              <h4 class="product_price">1222 $</h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 product_con">
            <div class="product">
              <img src="images/mouse3.jpg" alt="">
              <h5 class="product_name">MOUSE GAMER 1</h5>
              <h4 class="product_price">1222 $</h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 product_con">
            <div class="product">
              <img src="images/keyboard2.jpg" alt="">
              <h5 class="product_name">KEYBORAD GAMER 1</h5>
              <h4 class="product_price">1222 $</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="container justify-content-center user-reviews">
        <h2 class="text-center">Our Clients Reviews</h2>
        <div class="row mt-5 reviews-row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="review">
            <div class="r-img"><img src="images/user1.jpg" alt=""></div>
            <div class="r-info">
              <h5>Aziz Harkati</h5>
              <p>Good Gaming Store</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="review">
            <div class="r-img"><img src="images/user2.jpg" alt=""></div>
            <div class="r-info">
              <h5>Mohamed Amin</h5>
              <p>Best Pcs Gaming</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="review">
            <div class="r-img"><img src="images/user3.jpg" alt=""></div>
            <div class="r-info">
              <h5>Kamal Jamal</h5>
              <p>Nice Website</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="review">
            <div class="r-img"><img src="images/user4.jpg" alt=""></div>
            <div class="r-info">
              <h5>Ahmed Rabie</h5>
              <p>Thank You</p>
            </div>
          </div>
        </div>
        </div>
      </div>


<?php 
  require_once 'footer.php' 
?>