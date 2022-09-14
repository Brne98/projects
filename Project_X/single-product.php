<?php
session_start();
require_once __DIR__ . "/models/products-page-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";


$page=2;

if(!empty($_GET['page'])){
    $pageId=$_GET['page'];
}

$product= getOneProductById($pageId);
$related = getRelatedProducs($product);

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}

if(isset($_POST['product_id']) && !empty($_POST['product_id'])){
    $_SESSION['cart'][]=$_POST['product_id'];
}

require __DIR__ . "/views/_layout/header.php";

require __DIR__ . "/views/view-single-product.php";

require __DIR__ . "/views/_layout/footer.php";