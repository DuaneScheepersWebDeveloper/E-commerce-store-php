<?php 
//http://localhost/E-commerce-store-php/index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fight-Store 🥊</title>
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <!-- header -->
<header>
  <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
    <p class="font-arial font-size-12 text-black-50 m-0">6 Beach Rd, Woodstock, Cape Town, 8000(Generic address of a business)</p>
    <div class="font-arial font-size-14">
      <a href="#" class="px-3 border-right border-left text-dark">Login</a>
      <a href="#" class="px-3 border-right text-dark">WishList <span class="color-wishlist"><i class="fa-solid fa-heart"></i></span></a>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Fight Store 🥊</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-roboto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">On Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Category<i class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coming Soon</a>
          </li>
        </ul>
        <form action="#" class="font-size-14 font-arial">
          <a href="#" class="py-2 rounded-pill color-primary-bg">
            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
          </a>
        </form>
      </div>
    </div>
  </nav>

</header>
<!-- main -->
<main id="main-site">
  <!-- OwlCarousel2 -->
  <section id="banner-area">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="./assets/images/Hero.jpg" alt="">
      </div>
      <div class="item">
        <img src="./assets/images/Hero6.jpg" alt="">
      </div>
      <div class="item">
        <img src="./assets/images/Hero2.5.jpg" alt="">
      </div>
    </div>
  </section>
  <section id="top-sale">
    <div class="container py-5">
      <h4 class="font-arial font-size-20">Top Sale</h4> 
      <hr>
       <!-- owl-carousel -->
        <div class="owl-carousel owl-theme">
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/1.png" alt="product1" class="img-fluid product-image">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/2.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/3.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6> Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/4.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/5.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/6.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
        </div>

    </div>
  </section>
  <section id="special-price">
    <div class="container">
      <h4 class="font-arial font-size-20">Special Price</h4>
      <div id="filters" class="button-group text-right font-arial font-size-16">
        <button class="btn is-checked" data-filter="*">All Brand</button>
        <button class="btn" data-filter=".Adidas">Adidas</button>
        <button class="btn" data-filter=".Everlast">Everlast</button>
        <button class="btn" data-filter=".Ronex">Ronex</button>
      </div>
      
      <div class="grid">
        <div class="grid-item Adidas border">
          <div class="item py-2 " style="width:200px;">
          <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/1.png" alt="product1" class="img-fluid product-image">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
      </div>
      <div class="grid-item Everlast border">
          <div class="item py-2 " style="width:200px;">
          <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/4.png" alt="product1" class="img-fluid product-image">
                <div class="text-center">
                  <h6>Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
      </div>
      </div>

    </div>
  </section>
  <section id="banner_adds">
    <div class="container py-5 text-center">
      <img src="./assets/images/training2.jpg" alt="banner1" class="img-fluid">
      <img src="./assets/images/training4.jpg" alt="banner2" class="img-fluid">
    </div>
  </section>
  <section id="new-gloves">
    <div class="container">
      <h4 class="font-arial">New Products</h4>
      <hr>
       <!-- owl-carousel -->
       <div class="owl-carousel owl-theme">
          <div class="item py-2 ">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/1.png" alt="product1" class="img-fluid product-image">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/2.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/3.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6> Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/4.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/5.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="#">
                <img src="./assets/images/6.png" alt="product1" class="img-fluid">
                <div class="text-center">
                  <h6>Adidas Hybrid 25 Boxing Gloves</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R389.00</span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
        </div>
      <!-- owl-carousel -->
    </div>
  </section>
  <section id="banner_adds">
    <div class="container py-5 text-center bg-light">
      <img src="./assets/images/banner2-cr-500x150.jpg" alt="banner1" class="img-fluid">
    </div>
  </section>
  
</main>
<!-- footer -->
<footer id="footer" class="bg-dark text-white py-5">
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-12">
      <h4 class="font-arial font-size-20">Fight Store</h4>
      <p class="font-size-14 font-roboto text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, architecto in rem porro ullam odio temporibus quasi magnam enim facilis quia doloremque aliquid tenetur ipsum, dicta beatae dolorem est. Vitae.</p>
    </div>
    <div class="col-lg-4 col-12">
    <h4 class="font-arial font-size-20">Newsletter</h4>
    <form action="" class="form-row">
      <div class="col">
        <input type="text" class="form-control mb-2" placeholder="Email">
      </div>
      <div class="col">
        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
      </div>
    </form>
    </div>
    <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newsletters</a>
                </div>
              </div>
  </div>
</div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2022. Project By <a href="#" class="color-second">Duane Scheepers</a></p>
        </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- owl-carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Jquery Isotope -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom JavaScript -->
<script src="./static/js/index.js"></script>
</body>

</html>