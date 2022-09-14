<?php

$upload="./public/theme/img/profile.png";

if(isset($_POST['img']) && isset($_POST['fileToUpload'])){
    $jpg=$_POST['fileToUpload'];
    $upload="./public/theme/img/$jpg";
}

?>
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
    <div class="card p-4"> 
        <div class=" image d-flex flex-column justify-content-center align-items-center p-2"> 
            <button class="btn btn-secondary"> 
            <img src="<?php echo $upload ?>" height="100" width="100" />
            </button> 
            <span class="name mt-3"><?php echo "Welcome " . $_SESSION['name']; ?></span> 
            <span class="idd">@<?php echo $_SESSION['name']; ?></span> 
            

        <div class="d-flex flex-row justify-content-center align-items-center mt-3 p-2"> 
            <span class="number">0 <span class="follow">Followers</span></span> 
        </div> 

        <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> 
            <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> 
            <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> 
        </div> 

        <div class=" px-2 rounded mt-4 date "> 
            <span class="join">Joined <?php echo date("Y/m/d");?></span> 
        </div> 
        </div> 
    </div>
</div>