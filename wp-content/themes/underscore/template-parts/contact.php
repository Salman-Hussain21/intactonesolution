<?php
/*
Template Name: Contact Us*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us - IOS</title>
<!-- Stylesheets -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php

get_header();
?>

	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title-icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-1.png)"></div>
		<div class="page-title-icon-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-2.png)"></div>
		<div class="page-title-shadow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-1.png)"></div>
		<div class="page-title-shadow_two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-2.png)"></div>
        <div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="/home">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact Info -->
	<section class="contact-info">
		<div class="auto-container">
			<div class="row clearfix">


				<!-- Info Block One -->
				<div class="info-block_one active col-lg-6 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-envelope"></i>
						</div>
						<h4>Email us</h4>
						<a href="mailto:">info@intactonesolutions.com</a>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one col-lg-6 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-map"></i>
						</div>
						<h4>Our location</h4>
						<div class="text">Office #703 7th Floor, Alamgir Road. Sindh, Karachi Pakistan</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq One -->
	
		<!-- Team Detail Form -->
	<section class="team-detail_form">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<!-- Sec Title -->
					<div class="sec-title style-four">
						<div class="sec-title_title">CONTACT US</div>
						<h2 class="sec-title_heading">Let’s Bring Your<br><span>Ideas to Life!</span></h2>
						<div class="sec-title_text">At Intact One Solution, we’re always looking to partner with businesses that are ready to embrace digital transformation. Whether you’re looking to enhance your online presence or develop a custom solution, our team is here to help. Join us on this journey towards innovation — let’s create something amazing together.</div>
					</div>
					<!-- Social Box -->
					<div class="contact-social_box">
						<a href="https://www.facebook.com/profile.php?id=61559727491503"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/company/intact-one-solution/"><i class="fa-brands fa-linkedin"></i></a>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="default-form contact-form">
<form  method="post" action="" autocomplete="off" id="contact-form">
    <div class="row clearfix">
        <!--Form Group-->
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="text" id="name" name="name" value="" placeholder="Name" required>
        </div>
        <!--Form Group-->
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="email" id="email" name="email" value="" placeholder="Email" required>
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="text" id="phone" name="phone" value="" placeholder="Phone" required>
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="text" id="company" name="company" value="" placeholder="Company Name" required>
        </div>
        <!--Form Group-->
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" id="service" name="service" value="" placeholder="Enter Service Name" required>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <textarea id="message" name="message" placeholder="Type comment here*"></textarea>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <button type="submit" name="submit" class="template-btn btn-style-one">
                <span class="btn-wrap">
                    <span class="text-one">Send now</span>
                    <span class="text-two">Send now</span>
                </span>
            </button>
        </div>
    </div>
</form>

					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- End Team Detail Form -->
	<!-- Map One -->
	<section class="map-one">
		<div class="auto-container">
			<div class="map-one_map">

				<iframe width="820" height="560" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.5045161137896!2d67.06666307529723!3d24.88076694444488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fb19f9b19af%3A0xec8356c25b9f5730!2sIndigo%20Business%20Centre!5e0!3m2!1sen!2s!4v1728398028336!5m2!1sen!2s"></iframe>
			</div>
		</div>
	</section>
	<!-- End Map One -->


	
	<?php

get_footer();
?>