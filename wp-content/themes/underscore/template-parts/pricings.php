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
				<li><a href="/home">Home</a></li>
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
                          <li data-tab="#logo" class="tab-btn">Logo Design</li>
                             <li data-tab="#animation" class="tab-btn">Animation</li>
						<li data-tab="#illustration" class="tab-btn">Illustration</li>
                             <li data-tab="#branding" class="tab-btn">Branding</li>
                             <li data-tab="#saas" class="tab-btn">SaaS</li>
                             <li data-tab="#seo" class="tab-btn">SEO</li>
						     <li data-tab="#smm" class="tab-btn">SMM</li>
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
                                        <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>249.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="120">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>5-page website.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>5 stock photos.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Responsive design (Mobile-friendly).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic SEO setup.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1-month maintenance support.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>374.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="121">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>10-page website.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>CMS (Content Management System).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>8 stock photos</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>On-page SEO optimization.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 months maintenance.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>699.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="122">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>15-page custom website.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom forms and payment integration.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advanced SEO setup.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 months support and updates.</li>
												<li><i class=""></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
								
								
                                
                       <!-- App Tab -->
                    <div class="tab" id="app">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>749.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="123">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic 5-page app.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 platform (iOS or Android).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1-month post-launch support.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic user interface (UI).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>1449.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="124">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>10-page app.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>CMS integration for content updates.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 platforms (iOS & Android).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 months support.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>2499.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="125">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>20-page app with admin panel.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advanced user authentication.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Push notifications integration.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 months support with app updates.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
					
					                       <!-- Logo Tab -->
                    <div class="tab" id="logo">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>29.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="126">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 logo concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 rounds of revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>High-resolution final files.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>49.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="127">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 logo concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Free icon design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Grayscale and color formats.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>75.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="128">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>6 concepts with unlimited revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Business card design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Social media logo assets.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
		
						
					  <!-- animation Tab -->
                    <div class="tab" id="animation">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>334.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="129">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>30-second animated video.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Professional scriptwriting.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 revisions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>649.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="130">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>60-second video.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom storyboard development.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 rounds of revisions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>999.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="131">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>90-second animated video.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Unlimited revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Full voiceover and sound effects.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>

					
										  <!-- illustration Tab -->
                    <div class="tab" id="illustration">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>149.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="132">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 illustration concept.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Files in multiple formats (JPEG, PNG, SVG).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>179.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="133">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 illustration concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 rounds of revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom artwork tailored to brand style.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>269.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                             <a class="template-btn price-one_button call-btn" data-product_id="134">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Unlimited illustration concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Final files in print and digital formats</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
					
										  <!-- branding Tab -->
                    <div class="tab" id="branding">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>49.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                  <a class="template-btn price-one_button call-btn" data-product_id="136">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 stationery designs (Letterhead, Business card).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Print-ready formats.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>99.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                  <a class="template-btn price-one_button call-btn" data-product_id="137">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Stationery + flyer/brochure design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom color scheme and typography.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>199.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                 <a class="template-btn price-one_button call-btn" data-product_id="138">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Packaging design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>T-shirt design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Complete branding kit (logos, fonts, color codes)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
  						<!-- saas Tab -->
                    <div class="tab" id="saas">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>899<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="140">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 admin user.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 1,000 active users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic dashboard and reporting.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>1424<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                             <a class="template-btn price-one_button call-btn" data-product_id="141">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 admin users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 5,000 users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Priority technical support.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>2999<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                            <a class="template-btn price-one_button call-btn" data-product_id="142">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>5 admin users</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>24/7 support with cloud hosting.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
	
  						<!-- seo Tab -->
                    <div class="tab" id="seo">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>199.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                           <a class="template-btn price-one_button call-btn" data-product_id="143">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Optimization for 25 keywords.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>On-page SEO (meta tags, alt text).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Monthly performance reporting.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic site speed optimization.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>299.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                           <a class="template-btn price-one_button call-btn" data-product_id="144">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Optimization for 35 keywords.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Guest blog outreach.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Speed and mobile optimization.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Local SEO integration.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>349.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                            <a class="template-btn price-one_button call-btn" data-product_id="145">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>45 keywords with competitor analysis.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Blog writing and content acquisition.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Full on-page, off-page SEO.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Monthly backlink building.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
		 						<!-- smm Tab -->
                    <div class="tab" id="smm">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>125<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="146">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 social media channels setup.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 post design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Analytics setup.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>249.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="148">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 channels.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 posts per week.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Editorial calendar and content strategy.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>600<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="149">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 channels.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 posts per week.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Call-to-action (CTA) integration.</li>
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
