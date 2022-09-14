<?php

function getAllProducts(){

    $products = [
        [
            'id' => 1,
            'title' => "VOX FD 627 IXF",
            'description' => "Opis",
            'available' => true,
            'category' => "frizider",
            'img' => "./public/theme/img/slika1.jpg",
            'price' => 98900,
            'brand' => "VOX"
        ],
    
        [
            'id' => 2,
            'title' => "VOX SBS 657 IXF",
            'description' => "Opis",
            'available' => true,
            'category' => "frizider",
            'img' => "./public/theme/img/slika2.jpg",
            'price' => 112000,
            'brand' => "VOX"
        ],
    
        [
            'id' => 3,
            'title' => "VOX KS 0610 F",
            'description' => "Opis",
            'available' => false,
            'category' => "frizider",
            'img' => "./public/theme/img/slika3.jpg",
            'price' => 14000,
            'brand' => "VOX"
        ],
    
        [
            'id' => 4,
            'title' => "VOX KS 1530 F",
            'description' => "Opis",
            'available' => true,
            'category' => "frizider",
            'img' => "./public/theme/img/slika4.jpg",
            'price' => 20000,
            'brand' => "VOX"
        ],
    
        [
            'id' => 5,
            'title' => "BEKO FSM 57300 GX",
            'description' => "Opis",
            'available' => false,
            'category' => "sporet",
            'img' => "./public/theme/img/sporet1.jpg",
            'price' => 40000,
            'brand' => "BEKO"
        ],
    
        [
            'id' => 6,
            'title' => "BEKO FSS 56000 W",
            'description' => "Opis",
            'available' => true,
            'category' => "sporet",
            'img' => "./public/theme/img/SPORET2.jpg",
            'price' => 21000,
            'brand' => "BEKO"
        ],
    
        [
            'id' => 7,
            'title' => "TESLA CM 5220 SW",
            'description' => "Opis",
            'available' => false,
            'category' => "sporet",
            'img' => "./public/theme/img/sporet3.jpg",
            'price' => 24000,
            'brand' => "TESLA"
        ],
    
        [
            'id' => 8,
            'title' => "GORENJE EIT 6355 XPD",
            'description' => "Opis",
            'available' => true,
            'category' => "sporet",
            'img' => "./public/theme/img/sporet4.jpg",
            'price' => 80000,
            'brand' => "GORENJE"
        ],
    
        [
            'id' => 9,
            'title' => "TESLA CV 6400 SX",
            'description' => "Opis",
            'available' => true,
            'category' => "sporet",
            'img' => "./public/theme/img/sporet5.jpg",
            'price' => 41000,
            'brand' => "TESLA"
        ],
    
        [
            'id' => 10,
            'title' => "UNION mini sporet",
            'description' => "Opis",
            'available' => true,
            'category' => "sporet",
            'img' => "./public/theme/img/sporet6.jpg",
            'price' => 13000,
            'brand' => "UNION"
        ],
    
        [
            'id' => 11,
            'title' => "ALFA PLAM mini sporet",
            'description' => "Opis",
            'available' => true,
            'category' => "sporet",
            'img' => "./public/theme/img/sporet7.jpg",
            'price' => 16000,
            'brand' => "ALFA"
        ],
    
        [
            'id' => 12,
            'title' => "VOX 24DSA",
            'description' => "Opis",
            'available' => true,
            'category' => "tv",
            'img' => "./public/theme/img/tv1.jpg",
            'price' => 14300,
            'brand' => "VOX"
        ],
    
        [
            'id' => 13,
            'title' => "VIVAX 32S",
            'description' => "Opis",
            'available' => false,
            'category' => "tv",
            'img' => "./public/theme/img/tv2.jpg",
            'price' => 20000,
            'brand' => "VIVAX"
        ],
    
        [
            'id' => 14,
            'title' => "SAMSUNG 75",
            'description' => "Opis",
            'available' => true,
            'category' => "tv",
            'img' => "./public/theme/img/tv3.jpg",
            'price' => 325000,
            'brand' => "SAMSUNG"
        ],
    
        [
            'id' => 15,
            'title' => "UNION UE-12WINFL",
            'description' => "Opis",
            'available' => false,
            'category' => "klima",
            'img' => "./public/theme/img/klima1.jpg",
            'price' => 47000,
            'brand' => "UNION"
        ],
    
        [
            'id' => 16,
            'title' => "VOX IVA7",
            'description' => "Opis",
            'available' => true,
            'category' => "klima",
            'img' => "./public/theme/img/klima2.jpg",
            'price' => 50000,
            'brand' => "VOX"
        ],
    
        [
            'id' => 17,
            'title' => "GREE MUSE EVO",
            'description' => "Opis",
            'available' => true,
            'category' => "klima",
            'img' => "./public/theme/img/klima3.jpg",
            'price' => 76000,
            'brand' => "GREE"
        ],
    
        [
            'id' => 18,
            'title' => "VIVAX ACP",
            'description' => "Opis",
            'available' => true,
            'category' => "klima",
            'img' => "./public/theme/img/klima4.jpg",
            'price' => 83000,
            'brand' => "VIVAX"
        ],
    
        [
            'id' => 19,
            'title' => "SAMSUNG LUZON",
            'description' => "Opis",
            'available' => false,
            'category' => "klima",
            'img' => "./public/theme/img/klima5.jpg",
            'price' => 93000,
            'brand' => "SAMSUNG"
        ],
    
        [
            'id' => 20,
            'title' => "SAMSUNG wind free",
            'description' => "Opis",
            'available' => true,
            'category' => "klima",
            'img' => "./public/theme/img/klima6.jpg",
            'price' => 120000,
            'brand' => "SAMSUNG"
        ],
    
        [
            'id' => 21,
            'title' => "GORENJE MMO 20",
            'description' => "Opis",
            'available' => true,
            'category' => "mikrotalasna",
            'img' => "./public/theme/img/mikro1.jpg",
            'price' => 8000,
            'brand' => "GORENJE"
        ],
    
        [
            'id' => 22,
            'title' => "VOX MWH",
            'description' => "Opis",
            'available' => false,
            'category' => "mikrotalasna",
            'img' => "./public/theme/img/mikro2.jpg",
            'price' => 10000,
            'brand' => "VOX"
        ],
    
        [
            'id' => 23,
            'title' => "CANDY CMXW",
            'description' => "Opis",
            'available' => false,
            'category' => "mikrotalasna",
            'img' => "./public/theme/img/mikro3.jpg",
            'price' => 14000,
            'brand' => "CANDY"
        ],
    
        [
            'id' => 24,
            'title' => "TESLA MW",
            'description' => "Opis",
            'available' => true,
            'category' => "mikrotalasna",
            'img' => "./public/theme/img/mikro4.png",
            'price' => 15000,
            'brand' => "TESLA"
        ],
    
        [
            'id' => 25,
            'title' => "WHIRLPOOL MWP",
            'description' => "Opis",
            'available' => true,
            'category' => "mikrotalasna",
            'img' => "./public/theme/img/mikro5.jpg",
            'price' => 24000,
            'brand' => "WHIRPOOL"
        ],
    
    ];

    return $products;
}

function getAvailableProducts() {
    $products=getAllProducts();
    $available=[];

    foreach($products as $product){

        if($product['available']===true){
            $available[]=$product;
        }
    }
    return $available;
}

function searchProductsByTerm($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains($product['title'], $term) || str_contains($product['brand'], $term) || str_contains($product['category'], $term)) {
            $filteredProducts[] = $product;
        }
    }

    return $filteredProducts;
}  

function getOneProductById($id){
    $products=getAllProducts();
    foreach ($products as $product) {
        if($product['id']==$id){
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}

function getPrevProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == 0) {
                return $products[count($products) - 1]['id'];
            } else {
                return $products[$key-1]['id'];
            }
        }
    }
}
function getNextProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == (count($products) -1)) {
                return $products[0]['id'];
            } else {
                return $products[$key+1]['id'];
            }
        }
    }
}



