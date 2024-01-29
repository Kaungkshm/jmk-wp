<?php include('header.php'); ?>

<main>
    <section class="banner">
        <div class="position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/banner.png" alt=""
                class="w-100">
            <div class="hero">
                <h1 class="hero-title">Gallery</h1>
                <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="hero-text">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="hero-text">Gallery</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="gallery my-5 py-5">
        <div class="container">
            <div class="row gy-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-1.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-2.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-3.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-4.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-5.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-5.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-5.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-hover">
                        <img src="images/gallery/gallery-5.png" alt="" class="w-100 gallery-img">
                        <div class="gallery-overlay">
                            <img src="images/icon/zoom.png" alt="" class="gallery-icon">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row img-row" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="column img-column">
                        <img src="images/gallery/gallery-1.png" alt="" class="w-100">
                        <img src="images/gallery/gallery-2.png" alt="" class="w-100">
                        <img src="images/gallery/gallery-3.png" alt="" class="w-100">
                    </div>
                    <div class="img-column">
                        <img src="images/gallery/gallery-4.png" alt="" class="w-100">
                        <img src="images/gallery/gallery-5.png" alt="" class="w-100">

                    </div>
                    <div class="img-column">
                        <img src="images/gallery/gallery-6.png" alt="" class="w-100">
                        <img src="images/gallery/gallery-7.png" alt="" class="w-100">
                    </div>
                </div> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><img
                                    src="images/icon/x-circle.png" alt=""></button>
                            <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
                                <!-- <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div> -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/gallery/gallery-1.png" class="d-block w-100" alt="...">
                                        <div class="gallery-button">
                                            <!-- <h5>First slide label</h5> -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span> -->
                                                <img src="images/icon/chevrons-left.svg" alt="">
                                            </button>
                                            <p class="mb-0 text-white-50">1 / 15</p>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span> -->
                                                <img src="images/icon/chevrons-right.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="images/gallery/gallery-2.png" class="d-block w-100" alt="...">
                                        <div class="gallery-button">
                                            <!-- <h5>First slide label</h5> -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span> -->
                                                <img src="images/icon/chevrons-left.svg" alt="">
                                            </button>
                                            <p class="mb-0 text-white-50">2 / 15</p>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span> -->
                                                <img src="images/icon/chevrons-right.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="images/gallery/gallery-3.png" class="d-block w-100" alt="...">
                                        <div class="gallery-button">
                                            <!-- <h5>First slide label</h5> -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span> -->
                                                <img src="images/icon/chevrons-left.svg" alt="">
                                            </button>
                                            <p class="mb-0 text-white-50">3 / 15</p>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span> -->
                                                <img src="images/icon/chevrons-right.svg" alt="">
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>