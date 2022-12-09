<?php
// session_start();
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
    <link rel="stylesheet" href="./static/assets/css/style.css">

  <?php 
  require('./inc/functions.php');
    ?>
</head>

<body>
  <!-- header -->
<header>
  <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
    <p class="font-arial font-size-12 text-black-50 m-0">6 Beach Rd, Woodstock, Cape Town, 8000(Generic address of a business)</p>
    <div class="font-arial font-size-14">
      <a href="#" class="px-3 border-right border-left text-dark">Login</a>
      <a href="cart.php" class="px-3 border-right text-dark">WishList <span class="color-wishlist"><i class="fa-solid fa-heart"></i></span></a>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Fight Store 🥊</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-roboto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Products</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="brands.php">Category by brand<i class="fas fa-chevron-down"></i></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#">Find us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form action="#" class="font-size-14 font-arial">
          <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
          </a>
        </form>
      </div>
    </div>
  </nav>

</header>
<main id="main-site">