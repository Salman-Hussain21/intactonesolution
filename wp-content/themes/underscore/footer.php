<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>

<!-- CTA One -->
<section class="cta-one style-two">
    <div class="cta-one_shadow" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/background/cta-shadow.png')"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="cta-icon_one" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/cta-icon-1.png')"></div>
            <div class="cta-icon_two" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/cta-icon-2.png')"></div>
            <div class="cta-one_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cta-footer.png" alt="" />
            </div>
            <div class="row clearfix">
                <!-- Column -->
                <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="cta-one_title-outer">
                        <h2 class="cta-one_title">Craft creativity with our <span>Digital Experts.</span></h2>
                        <div class="cta-one_button">
                            <a href="/about-us" class="template-btn btn-style-three">
                                <span class="btn-wrap">
                                    <span class="text-one">Get started free</span>
                                    <span class="text-two">Get started free</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="cta-one_image-outer">
                        <div class="cta-one_cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cta-cards.png" alt="" />
                        </div>
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta-footer.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End CTA One -->


	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="footer_pattern" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/footer-pattern.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">
						
						<!-- Big Column -->
						<div class="big-column col-lg-5 col-md-12 col-sm-12">
							<div class="footer-newsletter">
								<h5 class="footer-title">Keep up with news and ideas.</h5>
								<div class="footer-newsletter_text">If you sign up for our emails, we'll send you expert tips and news on the latest digital trends and how to improve your business.</div>
<div class="newsletter-box">
    <form id="newsletter-form" method="post" action="#">
        <div class="form-group">
            <span class="icon fa-regular fa-envelope fa-fw"></span>
            <input type="email" id="email" name="email" placeholder="Enter your mail" required>
            <button type="submit" class="template-btn btn-style-one">
                <span class="btn-wrap">
                    <span class="text-one">Get Started</span>
                    <span class="text-two">Get Started</span>
                </span>
            </button>
        </div>
    </form>
</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-7 col-md-12 col-sm-12">
							<div class="footer-lists_outer">
								<div class="row clearfix">
									<!-- Column -->
									<div class="column col-lg-5 col-md-4 col-sm-6">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-pages_list">
											<li><a href="/home">Home</a></li>
											<li><a href="/about-us">About us</a></li>
											<li><a href="/pricings">Pricings</a></li>
											<li><a href="/portfolio">Portfolio</a></li>
											<li><a href="/contact-us">Contact us</a></li>
										</ul>
									</div>
									<!-- Column -->
									<div class="column col-lg-3 col-md-4 col-sm-6">
										<h5 class="footer-title">resources</h5>
										<ul class="footer-pages_list">
											<li><a href="/blogs">Blog</a></li>
											<li><a href="/faqs">FAQs</a></li>
											<li><a href="/privacy-and-policy">Privacy Policy</a></li>
											<li><a href="/terms-of-services">Terms of Services</a></li>
										</ul>
									</div>
									<!-- Column -->
									<div class="column col-lg-4 col-md-4 col-sm-6">
										<h5 class="footer-title">Contact</h5>
										<ul class="footer-pages_list">
											<li><a href="mailto:info@intactonesolutions.com">info@intactonesolutions.com</a></li>
											<li><a href="#">Office #703 7th Floor, Alamgir Road. Sindh, Karachi Pakistan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
					<div class="footer-logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.svg" alt="" title=""></a></div>
					<div class="footer-copyright">&copy; 2024 <a href="index.html">Intact one solution</a> All rights reserved.</div>
					<!-- Social Box -->
					<div class="footer-social_box">
						<a href="https://www.facebook.com/profile.php?id=61559727491503"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/company/intact-one-solution/"><i class="fa-brands fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>


</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/appear.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/tilt.jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>//js/jquery.paroller.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/backtotop.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/odometer.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax-scroll.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/SplitText.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollToPlugin.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollSmoother.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/touchspin.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.marquee.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/nav-tool.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/element-in-view.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>


<?php wp_footer(); ?>

</body>
</html>
