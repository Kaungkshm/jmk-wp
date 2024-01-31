<?php include 'header.php' ?>
<main>
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
    <!-- <section class="home-banner">
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
    </section> -->
    <?php $home_page = new WP_Query(
        array(
            'post_type' => 'home_page',
            'posts_per_page' => '1'
        )
    );
    while ($home_page->have_posts()):
        $home_page->the_post()
            ?>
        <section class="home-about my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $image = get_field('about_img');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                class="w-100">
                        <?php endif; ?>
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
                            <p class="content-1">
                                <?php echo the_field('about_text_1'); ?>
                            </p>
                        </div>
                        <div class="my-4">
                            <p class="content-2">
                                <?php echo the_field('about_text_2'); ?>
                            </p>
                        </div>
                        <div class="pt-4">
                            <a href="about-us" class="btn btn-all">
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
                        <p class="content-2">
                            <?php echo the_field('service_text'); ?>

                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="service-hover">
                                    <?php
                                    $image = get_field('service_img_1');
                                    if (!empty($image)): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" class="w-100">
                                    <?php endif; ?>
                                    <div class="ms-5 service-overlay">
                                        <div>
                                            <h3 class="so-text">Manning</h3>
                                        </div>
                                        <div class="pt-4">
                                            <a href="manning" class="btn btn-all">
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
                                    <?php
                                    $image = get_field('service_img_2');
                                    if (!empty($image)): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" class="w-100">
                                    <?php endif; ?>
                                    <div class="ms-5 service-overlay">
                                        <div>
                                            <h3 class="so-text">Training</h3>
                                        </div>
                                        <div class="pt-4">
                                            <a href="training" class="btn btn-all">
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
    <?php endwhile; ?>
    <section class="home-gallery py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5">
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
                <div class="row gy-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php
                    $current = get_query_var('paged') ? get_query_var('paged') : 1;
                    $gallery = new WP_Query(
                        array(
                            'post_type' => 'gallery_page',
                            'posts_per_page' => '3',
                            'orderby' => 'id',
                            'order' => 'DESC',
                            'paged' => $current,
                        )
                    );
                    $count = 0;
                    while ($gallery->have_posts()):
                        $gallery->the_post()
                            ?>
                        <div class="col-md-4 current" data-bs-target="#carouselId2" data-bs-slide-to="<?php echo $count; ?>"
                            data-current="<?php echo $count + 1; ?>">
                            <div class="gallery-hover">
                                <?php echo the_post_thumbnail("", array('class' => 'w-100 gallery-img')) ?>
                                <div class="gallery-overlay">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/zoom.png"
                                        alt="" class="gallery-icon">
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                    endwhile; ?>
                    <input type="hidden" id="currentConuter">
                </div>
                <div class="mt-5 pb-5 text-center">
                    <a href="gallery" class="btn btn-all">
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
                                    src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/x-circle.png"
                                    alt=""></button>
                            <div id="carouselId2" class="carousel slide carousel-fade">

                                <div class="carousel-inner">
                                    <?php $gallery = new WP_Query(
                                        array(
                                            'post_type' => 'gallery_page',
                                            'posts_per_page' => '-1',
                                            'orderby' => 'id',
                                            'order' => 'ASC'
                                        )
                                    );
                                    $counter = 0;
                                    while ($gallery->have_posts()):
                                        $gallery->the_post()
                                            ?>
                                        <div class="carousel-item <?php if ($counter == 0): ?>active<?php endif; ?>">
                                            <?php echo the_post_thumbnail("full", array('class' => 'w-100 h-100 d-block')) ?>
                                        </div>
                                        <?php $counter++;
                                    endwhile; ?>
                                    <div class="gallery-button">
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselId2" data-bs-slide="prev" onclick="preCount()">
                                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/chevrons-left.svg"
                                                alt="">
                                        </button>
                                        <p class="mb-0 text-white-50" id="carousel-count">
                                            <?php
                                            $total_items = $gallery->post_count; ?>
                                            1 /
                                            <?php echo esc_html($total_items);
                                            ?>
                                        </p>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselId2" data-bs-slide="next" onclick="updateCount()">

                                            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/chevrons-right.svg"
                                                alt="">
                                        </button>
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