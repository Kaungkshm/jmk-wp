<?php include 'header.php' ?>
<main>
    <section class="home-banner">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/slider-1.png"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/slider-2.png"
                        class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </section>
    <section class="home-about my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/home-about.png"
                        alt="" class="w-100">
                </div>
                <div class="col-md-6 py-5">
                    <div class="d-flex">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/anchor.png"
                                alt="" class="w-100">
                        </div>
                        <div class="ms-3">
                            <h6 class="title-6">About of Company</h6>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h2 class="title-2">Find and Book <br>
                            Your Dream</h2>
                    </div>
                    <div class="my-4">
                        <p class="content-1">Moe Khaing Asia Logistics International Co., Ltd was <br> established
                            in year 2006.</p>
                    </div>
                    <div class="my-4">
                        <p class="content-2">Moe Khaing Asia Logistics International Co., Ltd is operating as
                            provision of crew manning services in accordance with national, international
                            requirements and preparing to recruit Myanmar seafarers under full crew management
                            services for Cruises.

                        </p>
                    </div>
                    <div class="pt-4">
                        <a href="about-us.php" class="btn btn-all">
                            <div class="d-flex">
                                <div>
                                    READ MORE
                                </div>
                                <div class="ms-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/down-right.png"
                                        alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-service my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/anchor.png"
                                alt="" class="w-100">
                        </div>
                        <div class="ms-3">
                            <h6 class="title-6">Service of Company</h6>
                        </div>
                    </div>
                    <h2 class="title-2 my-4">Know What You're Looking for? </h2>
                    <p class="content-2">We provide crew management for various cruise ships starting from screening
                        of crew personal
                        from various sources, validity check for certificates, interview with potential candidates.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="service-hover">
                                <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/home-about-1.png"
                                    alt="" class="w-100">
                                <div class="ms-5 service-overlay">
                                    <div>
                                        <h3 class="so-text">Manning</h3>
                                    </div>
                                    <div class="pt-4">
                                        <a href="manning.php" class="btn btn-all">
                                            <div class="d-flex">
                                                <div>
                                                    READ MORE
                                                </div>
                                                <div class="ms-2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/down-right.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-hover">
                                <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/home-about-2.png"
                                    alt="" class="w-100">
                                <div class="ms-5 service-overlay">
                                    <div>
                                        <h3 class="so-text">Training</h3>
                                    </div>
                                    <div class="pt-4">
                                        <a href="training.php" class="btn btn-all">
                                            <div class="d-flex">
                                                <div>
                                                    VIEW MORE
                                                </div>
                                                <div class="ms-2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/down-right.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-gallery py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 mb-4">
                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/anchor.png"
                                alt="" class="w-100">
                        </div>
                        <div class="ms-3">
                            <h6 class="title-6">Gallery of Company</h6>
                        </div>
                    </div>
                </div>
                <div class="row g-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="col-md-4">
                        <div class="gallery-hover">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/home-gallery-1.png"
                                alt="" class="w-100 gallery-img">
                            <div class="gallery-overlay">
                                <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/zoom.png"
                                    alt="" class="gallery-icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-hover">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/home-gallery-2.png"
                                alt="" class="w-100 gallery-img">
                            <div class="gallery-overlay">
                                <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/zoom.png"
                                    alt="" class="gallery-icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-hover">
                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/index/home-gallery-3.png"
                                alt="" class="w-100 gallery-img">
                            <div class="gallery-overlay">
                                <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/zoom.png"
                                    alt="" class="gallery-icon">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-5 pb-5 text-center">
                    <a href="gallery.php" class="btn btn-all">
                        <div class="d-flex">
                            <div>
                                VIEW MORE
                            </div>
                            <div class="ms-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/down-right.png"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
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
<?php include 'footer.php' ?>