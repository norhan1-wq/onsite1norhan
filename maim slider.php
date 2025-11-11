<?php
include "./inc/data.php"
?>



<main class="container my-4">
    <section class="mb-5">
        <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php foreach($slider as $slid => $img): ?>
                    <div class="carousel-item <?= $slid == 0 ? 'active' : '' ?>">
                        <img src="<?= $img ?>" class="d-block w-100" style="height: 600px; object-fit: cover;" alt="library_<?= $slid ?>">
                    </div>
                <?php endforeach; ?>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</main>
