<?php include('header.php'); ?>

<main>
    <section class="banner">
        <div class="position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/banner.png" alt=""
                class="w-100">
            <div class="hero">
                <h1 class="hero-title">Contact Us</h1>
                <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="hero-text">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="hero-text">Contact Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="contact my-5 py-5">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6 col-12">

                    <h2 class="title-2">Let Us Know <br>
                        What You Think!</h2>
                    <div class="address">
                        <h6 class="contact-title mt-5">Contact Us</h6>
                        <div class="contact-text my-4">

                            <div class="d-flex my-2">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/address.png"
                                        alt="">
                                </div>
                                <div class="ms-3">
                                    <p style="padding-right: 250px;">(34), Room (11), Shwe Ohn Pin Housing (2), Yanshin
                                        Road, 5th
                                        Quarter,
                                        West Yankin, Yankin Township, Yangon, Myanmar.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex my-2">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/tele-blue.png"
                                        alt="">
                                </div>
                                <div class="ms-3">
                                    <p>

                                    </p>
                                </div>
                            </div>
                            <div class="d-flex my-2">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/mail-blue.png"
                                        alt="">
                                </div>
                                <div class="ms-3">
                                    <p>crewing.moekhaing@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-media">
                        <h6 class="contact-title mt-5">Follow us on social media</h6>
                        <div class="d-flex mt-4">
                            <div class="mx-2">
                                <a href="https://www.facebook.com/profile.php?id=100094866817867" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/facebook.png"
                                        alt="" class="w-100">
                                </a>
                            </div>
                            <div class="mx-2">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/youtube.png"
                                        alt="" class="w-100">
                                </a>
                            </div>
                            <div class="mx-2">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/linkedin.png"
                                        alt="" class="w-100">
                                </a>
                            </div>
                            <div class="mx-2">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/instragram.png"
                                        alt="" class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-form mt-4">
                        <form action="">
                            <div class="mb-4">
                                <input type="text" class="form-control edit-form" placeholder="Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control edit-form" placeholder="Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control edit-form" placeholder="Phone Number">
                            </div>
                            <div class="mb-4">
                                <textarea name="" id="" cols="30" rows="10" placeholder="Type Your Message Here.."
                                    class="form-control"></textarea>
                            </div>
                        </form>
                        <button class="btn-contact">
                            <div class="d-flex justify-content-center">
                                <div>
                                    Read More
                                </div>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/message.png"
                                        alt="">
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d389.9903383797687!2d96.15960398675618!3d16.828700787477132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19311c55048bf%3A0x8b859af0620e26f4!2sShwe%20Ohn%20Pin%20Housing%20(2)!5e0!3m2!1sen!2smm!4v1706179247170!5m2!1sen!2smm"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>
<?php include('footer.php'); ?>