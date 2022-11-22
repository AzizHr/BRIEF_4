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
          justify-content:center;
          align-items:center;
        }
        .reviews-row .r-holder{
          display:flex;
          justify-content:center;
          align-items:center;
        }
        .review{
          display:flex;
          align-items:center;
          justify-content:space-around;
          column-gap:20px;
          width:280px;
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
        .about-us{
          margin-top:200px;
        }
        .about{
          display:flex;
          justify-content:center;
          align-items:center;
        }
        .about h1{
          font-size:50px;
        }
        .about p{
          font-size:20px;
        }
        .about-img img{
            width:80%;
          }
        @media (max-width:768px) {
          .about-img{
            display: flex;
            justify-content: center;
          }
          .about-img img{
            width:90%;
          }
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

      <div class="container about-us">
        <div class="row about">
          <div class="col-lg-8 col-md-12 about-img" style="display: flex; justify-content: center;">
            <img src="images/about-us.jpg" alt="">
          </div>
          <div class="col-lg-4 col-md-12" tyle="width:80%; text-align:center;">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A possimus veritatis iure, dignissimos rerum error libero? Fuga consequatur ullam cumque voluptatibus. Facere in dignissimos fugit autem eius numquam! Ducimus, quibusdam!</p>
          </div>
        </div>
      </div>


      <div class="container justify-content-center user-reviews">
        <h2 class="text-center">Our Clients Reviews</h2>
        <div class="row mt-5 reviews-row">
        <div class="col-lg-3 col-md-6 col-sm-12 r-holder">
          <div class="review">
            <div class="r-img"><img src="images/user1.jpg" alt=""></div>
            <div class="r-info">
              <h5>User Name</h5>
              <p>User Review Here</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 r-holder">
          <div class="review">
            <div class="r-img"><img src="images/user2.jpg" alt=""></div>
            <div class="r-info">
              <h5>User Name</h5>
              <p>User Review Here</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 r-holder">
          <div class="review">
            <div class="r-img"><img src="images/user3.jpg" alt=""></div>
            <div class="r-info">
              <h5>User Name</h5>
              <p>User Review Here</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 r-holder">
          <div class="review">
            <div class="r-img"><img src="images/user4.jpg" alt=""></div>
            <div class="r-info">
              <h5>User Name</h5>
              <p>User Review Here</p>
            </div>
          </div>
        </div>
        </div>
      </div>


<?php 
  require_once 'footer.php' 
?>