<?php include 'header.php' ?>

<main>
    <section class="banner">
        <div class="position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/banner.png" alt=""
                class="w-100">
            <div class="hero">
                <h1 class="hero-title">About Us</h1>
                <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="hero-text">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="hero-text">About Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="about-1 my-5 py-5">
        <?php $about_us = new WP_Query(
            array(
                'post_type' => 'about',
                'posts_per_page' => '1'
            )
        );
        while ($about_us->have_posts()):
            $about_us->the_post()
                ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $image = get_field('about_image');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                class="w-100">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 py-5" style="padding-right: 70px;">
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
                            <p class="content-2">
                                <?php echo the_field('about_text_3'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="break my-5 py-5">
            <div class="container">
                <hr>
            </div>
        </section>
        <section class="goals my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/achieve.png"
                                    alt="">
                            </div>
                            <div class="ms-3">
                                <h3 class="goals-title">Number One Assets</h3>
                            </div>
                        </div>
                        <div class="goals-text mt-5">
                            <p>
                                <?php echo the_field('assets_1'); ?>
                            </p>
                            <p>
                                <?php echo the_field('assets_2'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-5">
                            <div class="vision">
                                <div class="d-flex">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/target.png"
                                            alt="">
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="goals-title">Our Vision</h3>
                                    </div>
                                </div>
                                <div class="goals-text mt-5">
                                    <p>
                                        <?php echo the_field('vision'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="mission mt-5 pt-5">
                                <div class="d-flex">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/mission.png"
                                            alt="">
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="goals-title">Our Mission</h3>
                                    </div>
                                </div>
                                <div class="goals-text mt-5">
                                    <p>
                                        <?php echo the_field('mission_1'); ?>
                                    </p>
                                    <p>
                                        <?php echo the_field('mission_2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php include 'footer.php' ?>