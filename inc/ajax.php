<?php

// MySQL connection
require('../model/database.class.php');
// require Product class
require('../model/product.class.php');

// DBController object
$db = new DBController();

// Product object
$product = new ProductClass($db);

if (isset($_POST['itemid'])) {
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}