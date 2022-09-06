<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="jumbotron jumbotron-flud">
        <div class="container">
            <h1 class="display-3 text-center"><?php echo $data['title'] ?></h1>
            <p class="lead text-center"><?php echo $data['description'];?></p>
            <p>Version: <strong><?php echo APPVERSION; ?></strong> </p>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>