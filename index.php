<!-- HOME PAGE -->
<?php require_once "./inc/header.php"; ?>
<?php require_once "./inc/nav-bar.php"; ?>

<div class="section">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img style="height: 32.96em;" src="img/pexels-pixelcop-3812773.jpg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="text-white">First slide label</h5>
                    <p class="text-danger">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img style="height: 32.96em;" src="img/pexels-didsss-3705645.jpg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="text-white">Second slide label</h5>
                    <p class="text-danger">Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img style="height: 32.96em;" src="img/pexels-travel-with-lenses-734723610-21660419.jpg"
                    class="d-block w-100 " alt="...">
                <div class="carousel-caption d-md-block">
                    <h5 class="text-white">Third slide label</h5>
                    <p class="text-danger">Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- <div class="product">
    <div class="container">
        <h1>home </h1>
        
        <h1 class="pt-3 pb-1 ps-3">Hello, world!</h1>
        <p class="text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <div class="row">
            <div class="col">
                <div class="card mb-3" style="width: 18rem;">
                    <img src="img/digital camera ___.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-black-50">Some quick example text to build on the card title and make
                            up the bulk of the card content.</p>
                        <a href="#" class="btn btn-main btn-primary">Go shop</a>
                    </div>
                </div>
        </div>
    </div>
</div> -->

<?php require_once "./inc/footer.php"; ?>