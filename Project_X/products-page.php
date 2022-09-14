<?php
session_start();
require_once __DIR__ . "/models/products-page-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";

$search="";

if(!empty($_GET['search'])){
    $search=$_GET['search'];
}

$available=getAvailableProducts();

if(isset($_GET['price']) && $_GET['price']==="lower"){
    array_multisort(array_map(function($element){
        return $element['price'];
    },$available),SORT_ASC,$available);
} elseif (isset($_GET['price']) && $_GET['price']==="higher"){
    array_multisort(array_map(function($element){
        return $element['price'];
    },$available),SORT_DESC,$available); 
}

$available=searchProductsByTerm($available,$search);

//SHOPPING CART(SESSION)
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}

if(isset($_POST['product_id']) && !empty($_POST['product_id'])){
    $_SESSION['cart'][]=$_POST['product_id'];
}


require __DIR__ . "/views/_layout/header.php";

require __DIR__ . "/views/view-products-page.php";

require __DIR__ . "/views/_layout/footer.php";


