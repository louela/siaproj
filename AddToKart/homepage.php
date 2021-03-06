
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/all.css"> 
  <title>ADD TO CART</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg px-4 sticky ">
      <a class="navbar-brand" href="#"><img src="img/logo.svg" alt=""></a>
      <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mx-auto text-capitalize">
          <li class="nav-item active"><a class="nav-link" href="#">home</a></li>
          <li class="nav-item"><a class="nav-link " href="#about">about</a></li>
          <li class="nav-item"><a class="nav-link" href="#store">store</a></li>
        </ul>
        
        <div class="nav-info-items d-none d-lg-flex ">
          <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
            <span class="info-icon mx-lg-3"><i class="fas fa-phone"></i></span>
            <p class="mb-0">+62 81366813996</p>
          </div>
        </div>
      </div>
      
      <div class="navbar-nav text-capitalize">
        <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between">
          <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart"></i></span>
          <p class="mb-0 text-capitalize"><span id="item-count">0 </span> items - $<span class="item-total">0.00</span>
          </p>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row max-height justify-content-center align-items-center">
        <div class="col-10 mx-auto banner text-center">
          <h1 class="text-capitalize">Support Local <strong class="banner-title ">only in the philippines</strong></h1>
          <a href="#store" class="btn banner-link text-uppercase my-2">ADD TO CART</a>
        </div>
        <div id="cart" class="cart">

          
          <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
            <h5>total</h5>
            <h5> $ <strong id="cart-total" class="font-weight-bold">0.00</strong> </h5>
          </div>
          <form action="checkout-process.php" method="post">
          <div class="cart-buttons-container mt-3 d-flex justify-content-between">
            <a id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
            <button type="submit" class="btn btn-outline-secondary btn-black text-uppercase">Checkout</button>

            </form>
        </div>
        </div>
      </div>
    </div>
    
  </header>

  <section class="about py-5" id="about">
    <div class="container">
      <div class="row">
        <div class="col-10 mx-auto col-md-6 my-5">
          <h1 class="text-capitalize">about <strong class="banner-title ">us</strong></h1>
          <p class="my-4 text-muted w-75">Discover local food products and delicacies at AddToKart in partnership with DTI Go Lokal. Support Philippine small businesses everytime you buy. Track An Order. Sign Up For News. Sign Up Online. Highlights: Order Tracking Option Available, Chat Option Available. </p>
          <a href="#store" class="btn btn-outline-secondary btn-black text-uppercase ">explore</a>
        </div>
        <div class="col-10 mx-auto col-md-6 align-self-center my-5">
          <div class="about-img__container">
            <img src="img/sweets-1.jpeg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="store" class="store py-5">
    <div class="container">
      <!-- section title -->
      <div class="row">
        <div class="col-10 mx-auto col-sm-6 text-center">
          <h1 class="text-capitalize">our <strong class="banner-title ">store</strong></h1>
        </div>
      </div>
      
      <div class="row">
        <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
          <a class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="all"> all</a>
          <a class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cakes">Fashion and Accessories</a>
          <a class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cupcakes">Home Living</a>
          <a class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="sweets">Food And Beverages</a>
          <a class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="doughnuts">Baby and Kids</a>
        </div>
      </div>
      
      <div class="row" class="store-items" id="store-items">
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div id="001" class="card">
            <div class="img-container">
              <img src="img/sweets-1.jpeg" class="card-img-top store-img" alt="" />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">Dried Mangoes</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div id="002" class="card ">
            <div class="img-container">
              <img src="img/cupcake-1.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">ANAHAW CANDLE HOLDER</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div id="003" class="card ">
            <div class="img-container">
              <img src="img/cake-1.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">ABACA NATURAL POUCH</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="doughnuts">
          <div id="004" class="card ">
            <div class="img-container">
              <img src="img/doughnut-1.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">G AND G PONY WITH VIOLET NECKLACE</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
              </div>
            </div>
          </div>
        </div>
      
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div id="005" class="card ">
            <div class="img-container">
              <img src="img/sweets-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">lechon baboy </h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div id="006" class="card ">
            <div class="img-container">
              <img src="img/cupcake-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">LAST SUPPER HAND</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div id="007" class="card ">
            <div class="img-container">
              <img src="img/cake-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">MATIGSALUG FRINGE NECKLACE</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="doughnuts">
          <div id="008" class="card ">
            <div class="img-container">
              <img src="img/doughnut-2.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">G AND G BEAR (BLUE FLORAL)</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div id="009" class="card ">
            <div class="img-container">
              <img src="img/sweets-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">MANGO CARAMEL CLASSIC</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>
              </div>
            </div>
          </div>
        </div>
      
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
          <div id="010" class="card ">
            <div class="img-container">
              <img src="img/cupcake-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">T'NALAK COASTER (LIGHT BLUE)</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
          <div id="011" class="card ">
            <div class="img-container">
              <img src="img/cake-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">FLAT SANDALS CS201706 ( CARMELLETES )</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="doughnuts">
          <div id="012" class="card ">
            <div class="img-container">
              <img src="img/doughnut-3.jpeg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name">G AND G BEAR (BROWN FLORAL)</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>
  </section>
 
  <footer id="footer">
    <div>
      <div id="copywrite"><p>Group Activity</p></div>
      <div id="myLink">
        <a href="https://www.shopinas.com/" class="btn btn-outline-secondary btn-black">
          <i class="fas fa-long-arrow-alt-left"></i> Support Lokal
        </a>
      </div>
    </div>
  </footer>

  <div id="confirmation" class="">
    <p>Your item has been added to the cart.</p>
  </div>
 
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/app.js"></script>
  
</body>
</html>