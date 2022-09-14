<?php
session_start();
require_once __DIR__ . "/models/products-page-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";

$items = getShoppingCart();

require __DIR__ . "/views/_layout/header.php";

require __DIR__ . "/views/view-shopping-cart.php";

require __DIR__ . "/views/_layout/footer.php";

?>
