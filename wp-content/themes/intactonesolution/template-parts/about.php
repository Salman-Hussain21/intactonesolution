<?php
/*
Template Name: About Us*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>About us - IOS</title>
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
    <div class="page-title-icon" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-1.png')"></div>
    <div class="page-title-icon-two" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-2.png')"></div>
    <div class="page-title-shadow" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-1.png')"></div>
    <div class="page-title-shadow_two" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-2.png')"></div>
    <div class="auto-container">
        <h2>About us</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>About us</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- About One -->
<section class="about-one">
    <div class="about-one_pattern" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/about-pattern.png)"></div>
    <div class="about-one_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/about-1.png)"></div>
    <div class="about-one_icon-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/about-2.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="about-one_tab-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about-one_tab-outer">
                    <div class="about-one_tab-shadow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/tab-shadow.png)"></div>
                    <div class="about-one_tab-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journey.svg" alt="" />
                    </div>
                </div>
            </div>

            <!-- Tab Column -->
            <div class="about-one_content-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">Our Journey</div>
                        <h2 class="sec-title_heading">Empowering Your Business Through <span>Innovation</span></h2>
                    </div>
                    <p>At Intact One Solution, our journey began with a passion for digital transformation and a 
commitment to delivering cutting-edge solutions. Since our inception, we’ve embraced 
innovation and AI-driven technology, helping businesses across industries thrive in the ever evolving digital landscape. Our mission is to bridge the gap between businesses and 
technological advancements, crafting solutions that are both forward-thinking and impactful.</p>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About One -->

<!-- Value One -->
<section class="value-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title style-four centered">
            <div class="sec-title_title">core value</div>
            <h2 class="sec-title_heading">Unveiling our <span>core values</span> <br> for lasting impact.</h2>
        </div>
        <div class="row clearfix">

            <!-- Value Block One -->
            <div class="value-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="value-block_one-inner">
                    <div class="value-block_one-icon">
                        <i class="icon-users-4"></i>
                    </div>
                    <h5 class="value-block_one-title">People</h5>
                    <div class="value-block_one-text">Our clients and users are at the core of everything we do. We are committed to 
understanding their needs and delivering beyond expectations.</div>
                </div>
            </div>

            <!-- Value Block One -->
            <div class="value-block_one active col-lg-4 col-md-6 col-sm-12">
                <div class="value-block_one-inner">
                    <div class="value-block_one-icon">
                        <i class="icon-bulb1"></i>
                    </div>
                    <h5 class="value-block_one-title">Innovation</h5>
                    <div class="value-block_one-text">We continuously evolve, adopting the latest technologies and techniques to offer 
innovative solutions that drive business success.</div>
                </div>
            </div>

            <!-- Value Block One -->
            <div class="value-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="value-block_one-inner">
                    <div class="value-block_one-icon">
                        <i class="fa-solid fa-bullseye fa-fw"></i>
                    </div>
                    <h5 class="value-block_one-title">Mission</h5>
                    <div class="value-block_one-text">Every project we undertake is focused on delivering results. We approach 
challenges with solutions that align with our clients’ goals.</div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Value One -->

<!-- Team One -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Showcasing Our Expertise</div>
                        <h2 class="sec-title_heading">Bringing Your <span>Vision to Life</span></h2>
                        <div class="sec-title_text">At Intact One Solution, our portfolio highlights our commitment to quality and innovation. We’ve collaborated with clients from various industries, including technology, healthcare, and e-commerce, transforming their visions into successful outcomes. Explore our projects to see how our expertise can bring your ideas to life.</div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="team-one_arrows">
                        <div class="team_carousel-prev fa-solid fa-angle-left fa-fw"></div>
                        <div class="team_carousel-next fa-solid fa-angle-right fa-fw"></div>
                    </div>
                </div>
            </div>

            <!-- Team Column -->
            <div class="team-one_team-column col-lg-8 col-md-12 col-sm-12">
                <div class="team-one_team-outer">
                    <div class="team-carousel swiper-container">
                        <div class="swiper-wrapper">
                            
                            
                                                                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                              <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                        <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging2.svg" alt="" /></a>
                                        </div>
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
<!-- End Team One -->


<!-- Answer One -->
<section class="answer-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="answer-one_title-column col-lg-5 col-md-12 col-sm-12">
                <div class="answer-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title title-anim">
                        <div class="sec-title_title">Our Proven Process:</div>
                        <h2 class="sec-title_heading">A Streamlined Approach That <span>Ensures Success</span></h2>
                    </div>
                    <ul class="answer-one_list">
                        <li><i class="fa-solid fa-check fa-fw"></i>Discovery: We truly understand your business to learn more.</li>
                        <li><i class="fa-solid fa-check fa-fw"></i>Strategy: Develop a plan that works for you.</li>
                        <li><i class="fa-solid fa-check fa-fw"></i>Design: Make forms that are easy to use and fun to use.</li>
						<li><i class="fa-solid fa-check fa-fw"></i>Development: Use cutting-edge technology to bring your ideas to life.</li>
						<li><i class="fa-solid fa-check fa-fw"></i>Optimize: Make small changes to get the best results.</li>
						<li><i class="fa-solid fa-check fa-fw"></i>Support: Help you can trust to keep your business growing.
</li>
                    </ul>
                    <div class="answer-one_button">
                        <a href="<?php echo get_template_directory_uri(); ?>/about.html" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Know more</span>
                                <span class="text-two">Know more</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab Column -->
            <div class="answer-one_content-column col-lg-7 col-md-12 col-sm-12">
                <div class="answer-one_content-outer">
                    <div class="answer-one_pattern" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/faq-shadow.png)"></div>
                    <div class="answer-one_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process.webp" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Answer One -->

<!-- Testimonial One -->
<section class="testimonial-one">
    <div class="auto-container">
        <div class="inner-container" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/testimonial-one_bg.png)">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Testimonials</div>
                <h2 class="sec-title_heading">Hear From Our <br> <span>clients</span></h2>
            </div>
            <div class="three-item_carousel swiper-container">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">“Intact One Solution completely redesigned our website and got great SEO results.” Highly
recommended! ”</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial1.png" alt="" />
                                    </div>
                                    Middle East <span>Business Client</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">Their app development exceeded our expectations and was completed on time and budget.</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial2.png" alt="" />
                                    </div>
                                     CEO <span>Fintech Company.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">Our search rankings have skyrocketed due to their professional SEO strategy.</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial3.png" alt="" />
                                    </div>
                                    E-commerce <span>Marketing Manager.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need pagination -->
                <div class="three-item_carousel-pagination"></div>

            </div>

        </div>
    </div>
</section>
<!-- End Testimonial One -->




<!-- Price One -->
<section class="price-one">
    <div class="price-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/price-bg.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title title-anim centered">
                <div class="sec-title_title">Our Pricing</div>
                <h2 class="sec-title_heading">You can find a <span>cheap plan </span></h2>
            </div>
            <div class="pricing-tabs tabs-box">
                
                <!-- Tab Btns -->
                <div class="buttons-outer">
                    <ul class="tab-buttons clearfix">
                        <li data-tab="#prod-monthly" class="tab-btn active-btn">Monthly</li>
                        <li data-tab="#prod-yearly" class="tab-btn">Yearly</li>
                    </ul>
                </div>

                <!-- Tabs Container -->
                <div class="tabs-content">
                    
                    <!-- Tab -->
                    <div class="tab active-tab" id="prod-monthly">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Starter</div>
                                        <div class="price-block_one-subtitle">Up to 2,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>3<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one active col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-one_stars" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/price-stars.png)"></div>
                                        <div class="price-block_one-title">Professional</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>9<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Enterprise</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>18<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab" id="prod-yearly">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Starter</div>
                                        <div class="price-block_one-subtitle">Up to 2,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>3<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one active col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-one_stars" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/price-stars.png)"></div>
                                        <div class="price-block_one-title">Professional</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>9<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Enterprise</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>18<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
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
    <!-- End Price One -->



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
						<div class="sec-title_text">At Intact One Solution, we provide straightforward, easy-to-understand answers to your IT service questions. Our FAQ section is designed to empower you to make informed choices for your business with confidence. Explore our expertise, and let us help you find the right solutions to drive your business forward efficiently.</div>
                    </div>
                    <div class="faq-one_button">
                        <a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="template-btn btn-style-one">
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
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>What can you offer?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">e offer a full range of digital services, including web design, SEO, app development, branding, and pay-per-click (PPC)</div>
                                </div>
                            </div>
                        </li>
                                    
                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How long does the average job take?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Most projects are completed between 4 and 12 weeks, depending on the size and scope of the project.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Can I trust the content generated by AI?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our AI copywriting tool uses sophisticated algorithms to understand context, tone, and language nuances. Users input specific details or prompts, and the AI generates high-quality content based on that input, refining.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Do you offer post-launch help?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, our ongoing help ensures your digital Solution continues to run well after launch.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How do you price?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We offer one-time and recurring prices so you can choose the option that works best for you.</div>
                                </div>
                            </div>
                        </li>
						
						<!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Can you handle enormous projects?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Of course. We know how to handle any job of any size and have the resources.</div>
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
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.svg" alt="" /></span>
        </div>
        <div class="inner-container">
            <div class="social-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern.png)"></div>
            <div class="social-one_bg-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern-two.png)"></div>
            
            <div class="social-box_one">
                <div class="animation_mode">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-1.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-2.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-3.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-4.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-5.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-6.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-7.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="social-box">
                <div class="animation_mode_two">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-8.png" alt="" />
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-10.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-11.png" alt="" />
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

<!-- News One -->
<section class="news-one">
    <div class="news-one_shadow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/news-shadow-1.png)"></div>
    <div class="news-one_shadow-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/news-shadow-2.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title title-anim centered">
            <div class="sec-title_title">Our Blog</div>
            <h2 class="sec-title_heading">Stay ahead with the latest <span> digital innovations</span></h2>
        </div>
        <div class="three-item_carousel swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="news-detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog1.webp" alt="" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-title"><a href="news-detail.html">Transforming industries and shaping the future</a></h5>
                                <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                <div class="news-block_one-button">
                                    <a href="blog.html" class="template-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Read more</span>
                                            <span class="text-two">Read more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="news-detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog2.webp" alt="" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-title"><a href="news-detail.html">Exploring the cutting-edge of artificial intelligence</a></h5>
                                <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                <div class="news-block_one-button">
                                    <a href="blog.html" class="template-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Read more</span>
                                            <span class="text-two">Read more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="news-detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog3.webp" alt="" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-title"><a href="news-detail.html">Understanding the basics of artificial intelligence</a></h5>
                                <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                <div class="news-block_one-button">
                                    <a href="blog.html" class="template-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Read more</span>
                                            <span class="text-two">Read more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- If we need pagination -->
            <div class="three-item_carousel-pagination"></div>
        </div>
    </div>
</section>
<!-- End News One -->

<?php

get_footer();
?>
