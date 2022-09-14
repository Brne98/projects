<main>

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

<nav aria-label="Page navigation example" class="mt-3 mx-auto">
                <ul class="pagination justify-content-center  ml-5">
                    <form action="./single-product.php" method="get">
                    <a class="btn btn-danger" 
                    href="./single-product.php?page=<?php echo htmlspecialchars(getPrevProductId($product['id'])); ?>">Previous</a>
                    <a class="btn btn-danger" 
                    href="./single-product.php?page=<?php echo htmlspecialchars(getNextProductId($product['id'])); ?>">Next</a>
                    </form>
                </ul>
            </nav>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                        <?php //$products=getAvailableProducts(); var_dump($products); ?> 
                            
                            <div class="text-center p-4"> <img id="main-image" src="<?php echo $product['img'] ?>" width="250" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> 
                                <h5 class="text-uppercase"><?php echo $product['title'] ?></h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $product['price'] . "din"; ?></span>
                                    <div class="ml-2"> <small class="dis-price"></small>  </div>
                                </div>
                            </div>
                            <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptatem quaerat ex aut, fuga, vel quibusdam commodi eius nam fugiat sapiente earum incidunt eaque ut mollitia sunt alias, veritatis inventore.</p>
                            
                            <div class="cart mt-4 align-items-center">
                                <!-- <form method="post" action="./single-product.php?page= -->
                                <!-- <?php //echo $product['id'] ?>"> -->
                                <button form="add-to-cart" class="btn btn-info" name="cart">Dodaj u korpu</button>
                                <!-- <label class="ml-1">Quantity:</label>
                                <input type="number" name="quantity"> -->
                                <form id="add-to-cart" method="post" action="./single-product.php?page=
                                <?php echo $product['id'] ?>">
                                <input type="hidden" name="product_id" value=" <?php echo $product['id']; ?>">
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
            <?php 
            if(!empty($related)){
            foreach ($related as $singleRelated) { ?>
            <div class="single-product col-4 row ml-5 mb-5 mt-5 p-2 d-grid">
                <div class='col-5'>
                    <img src="<?php echo ($singleRelated['img']); ?>" alt="" width="100" height="100">
                </div>
                <div class='col-7'>
                    <span><?php echo ($singleRelated['title']); ?></span>
                    <a class="btn btn-danger" href="./single-product.php?page=<?php echo $singleRelated['id']; ?>">Show Product</a>
                </div>
            </div>
            <?php } }?>  
            </div>
            
            
            
</main>              
            