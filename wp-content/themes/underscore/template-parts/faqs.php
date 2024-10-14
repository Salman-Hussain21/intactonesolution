<?php
/*
Template Name: FAQs*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>FAQs - IOS</title>
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

		<!-- Preloader -->
	<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="txt-loading">
						<span data-text-preloader="L" class="letters-loading">L</span>
						<span data-text-preloader="O" class="letters-loading">O</span>
						<span data-text-preloader="A" class="letters-loading">A</span>
						<span data-text-preloader="D" class="letters-loading">D</span>
						<span data-text-preloader="I" class="letters-loading">I</span>
						<span data-text-preloader="N" class="letters-loading">N</span>
						<span data-text-preloader="G" class="letters-loading">G</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader End -->
	
<?php
get_header();
?>

<!-- Page Title -->
<section class="page-title">
    <div class="page-title-icon" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-1.png')"></div>
    <div class="page-title-icon-two" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-2.png')"></div>
    <div class="page-title-shadow" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-1.png')"></div>
    <div class="page-title-shadow_two" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-2.png')"></div>
    <div class="auto-container">
        <h2>Frequently Asked Questions</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="/home">Home</a></li>
            <li>FAQS</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Faq One -->
<section class="faq-one">
    <div class="faq-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/faq-bg.png)"></div>
    <div class="faq-one_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/step.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="faq-one_title-column col-lg-5 col-md-12 col-sm-12">
                <div class="faq-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title title-anim">
                        <div class="sec-title_title">FAQ</div>
                        <h2 class="sec-title_heading">We’ve got your questions <span>answered</span></h2>
						<div class="sec-title_text">
						    Welcome to the Intact One Solution FAQ section! Here, you’ll find quick answers to common 
questions about our services, processes, and policies. We aim to provide clarity and 
transparency to help you make informed decisions. If you have more questions, don’t hesitate 
to reach out!
						</div>
                    </div>
                    <div class="faq-one_button">
                        <a href="/contact-us" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Contact now</span>
                                <span class="text-two">Contact now</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Accordion Column -->
            <div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
                <div class="faq-one_accordian-outer">

                    <!-- Accordion Box -->
                    <ul class="accordion-box_two">
                        
                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>What Services Do You Offer?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        At Intact One Solution, we provide a comprehensive range of digital services, including web 
design and development, mobile application development, SEO and content writing, branding 
and graphic design, social media marketing, and SaaS solutions tailored to your business needs.

                                    </div>
                                </div>
                            </div>
                        </li>
                                    
                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How Long Does It Take to Develop a Website?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        The timeline for developing a website typically ranges from 4 to 8 weeks. Factors such as the 
complexity of the design, the number of features, and client feedback can influence the 
duration.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How Long Does It Take to Develop a Mobile App?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        Mobile app development generally takes between 8 to 12 weeks or more, depending on the 
project's complexity and the specific features required for iOS and Android platforms.
                                        </div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>What Platforms Do You Specialize In?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        We specialize in various platforms, including content management systems like WordPress and 
Shopify, mobile platforms such as iOS (Swift) and Android (Java/Kotlin), and web development 
frameworks like React and Laravel.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How Do You Charge for Your Services?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        Our pricing structure includes fixed project fees for well-defined projects, hourly rates for 
ongoing support, and monthly retainers for long-term collaborations. We communicate all 
pricing details clearly before starting any project.
                                    </div>
                                </div>
                            </div>
                        </li>
						
						<!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Do You Provide Ongoing Support After Development?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we offer ongoing support and maintenance services to ensure your website or app runs 
smoothly, including updates, troubleshooting, and enhancements to help you focus on your 
core business</div>
                                </div>
                            </div>
                        </li>
                        
                        
                                                <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Can You Help with SEO and Marketing?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Absolutely! We provide SEO services to improve your website’s visibility on search engines, 
content marketing to engage your audience, and social media marketing strategies to enhance 
your online presence.</div>
                                </div>
                            </div>
                        </li>
                        
						<!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>What is Your Refund Policy?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our refund policy allows for a full refund minus a 10% service fee before initial design 
submission and within 48 hours of delivery. Refunds of 33% can be requested within 48-120 
hours after delivery, but no refunds are issued beyond 120 hours.</div>
                                </div>
                            </div>
                        </li>
                        
                        						<!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How Do You Ensure Data Security?

</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We prioritize data security by implementing industry-standard encryption, access controls, and 
regular security audits to protect your personal information and ensure the integrity of our 
services.</div>
                                </div>
                            </div>
                        </li>
                        
                        
                        
                        						<!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How Can I Contact You with Questions or Concerns?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">You can reach us at <strong>info@intactonesolution.com</strong> or use our contact form on the 
website. Our dedicated team is ready to assist you with any inquiries or concerns you may have.</div>
                                </div>
                            </div>
                        </li>
                        
                        
                        
                        						<!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>What is Your Refund Policy?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our refund policy allows for a full refund minus a 10% service fee before initial design 
submission and within 48 hours of delivery. Refunds of 33% can be requested within 48-120 
hours after delivery, but no refunds are issued beyond 120 hours.</div>
                                </div>
                            </div>
                        </li>
                        
                        
                        
                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Faq One -->

<!-- Social One -->
<section class="social-one">
    <div class="social-one_bg-shadow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-bg.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">Integrations</div>
            <h2 class="sec-title_heading">Incorporate our tool into <br> <span>your everyday tasks</span></h2>
        </div>
        <div class="social-one_logo">
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/abc.png" alt="" /></span>
        </div>
        <div class="inner-container">
            <div class="social-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern.png)"></div>
            <div class="social-one_bg-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern-two.png)"></div>
            
            <div class="social-box_one">
                <div class="animation_mode">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/webflow.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/html.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/css.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/js.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/react.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/php.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bootstrap.png" alt="" />
                        </a>
                    </div>
					 <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ts.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="social-box">
                <div class="animation_mode_two">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-2.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-9.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/wp.webp" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shopify.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-12.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-13.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-14.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Social One -->


<?php
get_footer();
?>
