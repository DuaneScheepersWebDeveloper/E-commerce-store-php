<?php
//http://localhost/E-commerce-store-php/pages/product.php
//http://localhost/E-commerce-store-php/product.php
ob_start();
 // include header.php file
include("./template/partials/header.php");
/*  include products-template  */
include("./template/partials/products-template.php");
/*  include top sale section */
include("./template/partials/top-sale.php");
// include footer.php file
include("./template/partials/footer.php");
?>