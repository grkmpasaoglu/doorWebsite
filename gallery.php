<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <!-- Header Start -->
    <?php include 'includes/navbar.php'; ?>
    <!-- Header End -->

    <!-- Gallery Start -->

    <!-- Gallery -->
    <h1 class="gallery-title">GALERİ</h1>
    <section class="gallery min-vh-100 mt-2">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="./images/carousel-1.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="./images/carousel-2.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="./images/carousel-3.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="./images/home-bg4.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="./images/home-bg5.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="./images/dgallery-1.jpg" class="gallery-item" alt="gallery">
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/1.jpg" class="modal-img" alt="modal img">
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->

    <!-- Gallery End -->


    <?php include 'includes/footer.php'; ?>
</body>

</html>