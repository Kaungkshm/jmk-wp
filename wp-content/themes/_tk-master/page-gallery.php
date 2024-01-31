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
                <?php
                $current = get_query_var('paged') ? get_query_var('paged') : 1;
                $gallery = new WP_Query(
                    array(
                        'post_type' => 'gallery_page',
                        'posts_per_page' => '20',
                        'orderby' => 'id',
                        'order' => 'ASC',
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

<?php include('footer.php'); ?>