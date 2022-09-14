
    <main class="bg-secondary">
    
    <form class="border-top border-bottom" action="./products-page.php" method="get">
        <div class="row m-1">
            <div class="col-9 ml-2 mt-2 pb-1">
                <select class="m-1" name="price">
                    <option disabled selected> -Sort by:-</option>
                    <option value="lower" >Price (lower first)</option>
                    <option value="higher">Price (higher first)</option>
                </select>
            </div>
            <div class="col-2 d-inline-flex m-1 h-40">
                <input type="text" class="form-control " placeholder="Search" name="search">
                <button type="submit" class="btn btn-light ml-1">OK</button>
            </div>
            
        </div>
    </form>
    <div class="row justify-content-end w-100 p-2 border-bottom">
          <div class="col-2">
          <a class="nav-item active" href="shopping-cart.php"><button class="btn btn-info">
             Shopping cart
             <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <?php if(!empty($_SESSION['cart']) && isset($_SESSION['cart'])){
                echo count($_SESSION['cart']);
              } else {
                echo 0;
              } ?>
             </span>
            </button></a>
          </div>
        </div>
    <div class="row m-5">
      <?php foreach($available as $product){?>
        <div class="card m-3 col-2" style="width: 18rem;">
          <a href="./single-product.php?page=<?php echo $product['id']; ?>" class="link-dark">"<img class="card-img-top mt-1" src="<?php echo $product['img']; ?>" alt="Card image cap"></a>
          <div class="card-body">
            <a href="./single-product.php?page=<?php echo $product['id']; ?>" class="link-dark"><h5 class="card-title"><?php echo $product['title']; ?></h5></a>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text"><b><?php echo "Cena: " . $product['price'] . "din"; ?></b></p>
            <button form="add-to-cart-<?php echo $product['id']; ?>" class="btn btn-primary" name="cart">Dodaj u korpu</button>
            <form id="add-to-cart-<?php echo $product['id']; ?>" method="post" action="./products-page.php">
              <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            </form>
          </div>
        </div>
      <?php } ?>
    </div>
    
    </main>
    
