<?php
// MySQL connection
require('./model/database.class.php');
// require Product class
require('./model/product.class.php');
// require Product class
require('./model/cart.class.php');

//Database object
$db = new DBController();

//Product object
$product = new ProductClass($db);
// print_r($product->getData());
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db);
