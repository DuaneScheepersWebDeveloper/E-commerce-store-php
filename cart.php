<?php
//http://localhost/E-commerce-store-php/pages/cart.php
//http://localhost/E-commerce-store-php/cart.php
ob_start();
//--------------------------------------------------------
// session_start();
// $user_id = $_SESSION['user_id'];
// if (!isset($user_id)) {
//    header('location:login_page.php');
// }
//--------------------------------------------------------
 // include header.php file
include("./template/partials/header.php");
/*  include cart-template  */
    /*  include cart items if it is not empty */
    count($product->getData('cart')) ? include ('./template/partials/cart-template.php') :  include ('./template/partials/notFound/cart.notFound.php');
    count($product->getData('wishlist')) ? include ('./template/partials/wishlist-template.php') :  include ('./template/partials/notFound/wishlist.notFound.php');



/*  include new gloves section  */
// include("./template/partials/new-gloves.php");
/*  include banner ads 2  */
include("./template/partials/banner-adds-2.php");
// include footer.php file
include("./template/partials/footer.php");
?>