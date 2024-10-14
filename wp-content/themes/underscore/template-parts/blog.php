<?php
/*
Template Name: Blog*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Blogs - IOS</title>
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
			<h2>Our blog</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="/home">Home</a></li>
				<li>Blog</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- News Three -->
<!-- News Three -->
<section class="news-three">
    <div class="auto-container">
        <div class="row clearfix">
            <?php
            // Define the query parameters
            $args = array(
                'post_type' => 'post', // Post type to fetch
                'posts_per_page' => -1, // Number of posts to show
                'order' => 'DESC', // Order of posts
                'orderby' => 'date' // Sort by date
            );

            // Custom query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <!-- News Block One -->
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <div class="news-block_one-time">By <?php the_author(); ?> <span><?php echo get_the_time('G') . ' min read'; ?></span></div>
                                <h5 class="news-block_one-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php 
                                        // Limit the title to 69 characters
                                        $title = get_the_title();
                                        if (mb_strlen($title) > 69) {
                                            echo mb_strimwidth($title, 0, 69, '...');
                                        } else {
                                            echo $title;
                                        }
                                        ?>
                                    </a>
                                </h5>
                                <a class="news-block_one-more" href="<?php the_permalink(); ?>">Read more <i class="fa-solid fa-plus fa-fw"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata(); // Restore original Post Data
            else : 
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>



			


<?php
get_footer();
?>
