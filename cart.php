<?php
//http://localhost/E-commerce-store-php/pages/cart.php
//http://localhost/E-commerce-store-php/cart.php
ob_start();
 // include header.php file
include("./template/partials/header.php");
/*  include cart-template  */
include("./template/partials/cart-template.php");
/*  include new gloves section  */
include("./template/partials/new-gloves.php");
// include footer.php file
include("./template/partials/footer.php");
?>