<?php
include "./inc/data.php";

if (isset($_GET["id"])){
    $id=$_GET["id"];
    if (array_key_exists($id,$citis)){

        $display=$citis[$id];


    }else{
    header("location: index.php");
    exit;
}

}
else{
    header("location: index.php");
    exit;
}

$id=$_GET["id"];


$headernav="🧾library ditails";


$page="Details";

include "./inc/head.php"

?>

    <!-- NOTICE: We are repeating the Navbar and Header code. We will fix this in Part 2! -->
      <?php
       
      
      include "./inc/nav.php" ?>

    <?php include "./inc/header.php" ?>

    <!-- Main Content for the Details Page -->
   <main class="container my-4">
    <section class="p-5 bg-light rounded">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="<?=$display['img'];?>" class="img-fluid rounded" alt="<?=$display['title'];?>">
            </div>
            <div class="col-md-6">
                <h2 class="display-5 fw-bold"><?=$display['title'];?></h2>
                <h5 class="text-muted mb-3">By <?=$display['author'];?></h5> <!-- Author added here -->
                <p class="lead"><?=$display['deck'];?></p>
                <a href="index.php" class="btn btn-warning btn-lg mt-3">Back to Home</a>
            </div>
        </div>
    </section>
</main>

    <!-- NOTICE: We are also repeating the Footer code. -->
     <?php include "./inc/footer.php" ?>