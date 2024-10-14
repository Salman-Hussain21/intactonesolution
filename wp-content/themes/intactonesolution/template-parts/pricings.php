<?php
/*
Template Name: Pricings*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pricings - IOS</title>
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
			<h2>Our pricing</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Pricing</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->



<!-- Price One -->
<section class="price-one">
    <div class="price-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/price-bg.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title title-anim centered">
                <div class="sec-title_title">Our Pricing</div>
                <h2 class="sec-title_heading">You can find a <span>cheap plan </span> that works for your business</h2>
            </div>
            <div class="pricing-tabs tabs-box">
                
                <!-- Tab Btns -->
              
                    <ul class="tab-buttons clearfix">
                        <li data-tab="#web" class="tab-btn active-btn">Web Development</li>
                        <li data-tab="#app" class="tab-btn">App Development</li>
                          <li data-tab="#logo" class="tab-btn">Logo & Illustration</li>
                             <li data-tab="#smm" class="tab-btn">SMM</li>
                             <li data-tab="#animation" class="tab-btn">Animation</li>
                             <li data-tab="#branding" class="tab-btn">Branding</li>
                             <li data-tab="#saas" class="tab-btn">SaaS</li>
                             <li data-tab="#seo" class="tab-btn">SEO</li>
                    </ul>
      

                <!-- Tabs Container -->
                <div class="tabs-content">
                    
                    <!-- Tab -->
                    <div class="tab active-tab" id="web">
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
                    <div class="tab" id="app">
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





<?php
get_footer();
?>
