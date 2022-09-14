<?php
function getShoppingCart(){
    $cart=[];
    if(!empty($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $productId) {
            $cart[] = getOneProductById($productId);
        }
    }
    return $cart;
}

