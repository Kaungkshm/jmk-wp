<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 text-center my-5 py-5">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/logo/logo-1.png"
						alt="">
					<h5 class="title-5">Moe Khaing Asia Logistics <br> Co.,Ltd.</h5>
				</div>
				<div class="d-flex justify-content-center mt-4">
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
			<div class="col-lg-8  footer-1">
				<div class="row">
					<div class="col-lg-5 col-md-6 pb-5 ps-5">
						<h4 class="title-4 mb-5">Contact Us</h4>
						<?php $address = new WP_Query(
							array(
								'post_type' => 'address',
								'posts_per_page' => '1'
							)
						);
						while ($address->have_posts()):
							$address->the_post()
								?>
							<div class="content-3">
								<div class="d-flex my-2">
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/vector.png"
											alt="">
									</div>
									<div class="ms-3">
										<p style="padding-right: 90px;">
											<?php echo the_field('address'); ?>
										</p>
									</div>
								</div>
								<div class="d-flex my-2">
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/telephone.png"
											alt="">
									</div>
									<div class="ms-3">
										<p>
											<?php echo the_field('phone'); ?>
										</p>
									</div>
								</div>
								<div class="d-flex my-2">
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/icon/mail.png"
											alt="">
									</div>
									<div class="ms-3">
										<p>
											<?php echo the_field('mail'); ?>
										</p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="col-lg-2 col-md-2 ps-4">
						<h4 class="title-4 mb-5">Links</h4>
						<ul class="list-unstyled">
							<li class="my-3">
								<a href="/" class="content-3">Home</a>
							</li>
							<li class="my-3">
								<a href="about-us" class="content-3">About Us</a>
							</li>
							<li class="my-3">
								<a href="manning" class="content-3">Manning</a>
							</li>
							<li class="my-3">
								<a href="training" class="content-3">Training</a>
							</li>
							<li class="my-3">
								<a href="contact-us" class="content-3">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 text-md-center pt-5">
						<img src="<?php echo get_template_directory_uri(); ?>/includes/jmk-template/images/logo/ISO logo.png"
							alt="" class="w-100">
					</div>
				</div>
			</div>
		</div>

	</div>
</footer>
</body>

<?php wp_footer(); ?>

</html>