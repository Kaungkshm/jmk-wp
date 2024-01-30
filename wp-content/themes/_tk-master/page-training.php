<?php include('header.php'); ?>

<main>
    <section class="banner">
        <div class="position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/banner.png" alt=""
                class="w-100">
            <div class="hero">
                <h1 class="hero-title">Services</h1>
                <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="hero-text">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="hero-text">Crew Training</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <?php $training = new WP_Query(
        array(
            'post_type' => 'crew_training',
            'posts_per_page' => '1'
        )
    );
    while ($training->have_posts()):
        $training->the_post()
            ?>
        <section class="manning-1 my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        $image = get_field('training_img_1');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                class="w-100">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 mt-5">
                        <h2 class="title-2">Crew Training</h2>
                        <div class="mt-4">
                            <p class="goals-text">
                                <?php echo the_field('training_text_1'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="manning-2 my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="goals-text pe-5">
                            <?php echo the_field('training_text_2'); ?>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $image = get_field('training_img_2');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                class="w-100">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php include('footer.php'); ?>