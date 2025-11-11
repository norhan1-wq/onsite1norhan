<main class="container my-4">
  
        <?php include "./inc/data.php" ?>

        <!-- City Cards Section -->
       
 <section>
    <h2 class="text-center mb-5">📚BOOK</h2>
    <div class="row justify-content-center">
        <?php foreach($citis as $city_id => $city): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                   
                    <div style="height: 300px; overflow: hidden;">
                        <img src="<?= $city["img"] ?>" class="card-img-top" alt="book image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    
                    
                    <div class="card-body d-flex flex-column text-center p-4">
                        <h5 class="card-title mb-3"><?= $city["title"] ?></h5>
                        <a href="details.php?id=<?= $city_id ?>" class="btn btn-outline-secondary mt-auto text-black px-4">Learn More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

