<?php 


	$logo = get_field('header_logo_svg','option');
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="stylesheet" href="https://use.typekit.net/gbh6fcn.css">
        
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        //conditionizr.config({
            //assets: '<?php echo get_template_directory_uri(); ?>',
            //tests: {}
        //});
        </script>
        
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
			<!--Search Slider HTML here-->
			<div class="slider_wrap">
				<div class="search_slider">
					<div class="search_panel" id="overlay_slider">
						<div id="submit_slider" class="panel_search_icon">
							<i class="fas fa-search fa-3x"></i>
						</div>
						<div class="panel_input" id="slide_input">
                            <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
	                            <input type="hidden" value="product" name="post_type" />
								<input type="text" value="" id="large_searcher_input" class="text_input" name="s" placeholder="Search" autocomplete="off" />
	                            <input type="submit" value="" id="searchsubmit" />
                            </form>
                            <div class="search_suggest" id="suggest_search">
                            </div>
						</div>
						<div id="exit_overlay" class="panel_exit_icon">
							<i class="fas fa-times fa-2x"></i>
						</div>
					</div>
				</div>
			</div>
			<!--Top Header Bar contains Modal Button and Search Slider Button-->
			<div id="slider_overlay" class="grid-x top_header_bar">
				<div class="small-4 cell cell-1">
					<div>Top bar</div>
				</div>
				<div class="small-4 cell cell-2">
					<a class="button" href="javascript:void(0)" target="_self" data-open="site-modal">Open Modal</a>
				</div>
				<div class="small-4 cell cell-3">
					<div id="searchIcon" class="icon_wrap">
						<i class="fas fa-search fa-2x search_icon"></i>
					</div>
				</div>
			</div>
			<!--Bottom Header Bar is contained within a Foundation Sticky Header Container. The logo and hamburger button are contained within-->
			<div class="sticky--container" data-sticky-container>
				<div class="grid-x bottom_header_bar sticky" data-sticky data-top-anchor="66">
					<div class="small-6 medium-4 cell logo_cell">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo $logo['url']; ?>" alt="Logo" class="logo-img">
							</a>
						</div>
					</div>
					<div class="small-6 medium-8 cell nav_cell hide-for-large">
						<div class="hamburger_button">
	                        <div class="button_container" id="toggle" data-toggle="offCanvas">
	                            <span class="top"></span>
	                            <span class="middle"></span>
	                            <span class="bottom"></span>
	                        </div>
	                    </div>             
					</div>
					<div class="large-8 cell nav_cell show-for-large">
						<nav class="nav" role="navigation">
							<?php main_nav(); ?>
						</nav>      
					</div>
				</div>
			</div>
		</header>

		<!--This loads the Foundation offCanvas menu panel. If you comment it out, then there are two closing divs in the footer that must be commented out. See off-canvas.php and footer.php for reference.-->
		<?php
           get_template_part('template-parts/off-canvas');
        ?>

        <!--Here is a Foundation modal ready to be used. The working button is in the header Top Bar.-->
        <div class="reveal site_modal" id="site-modal" data-animation-in="fade-in" data-animation-out="fade-out" data-reveal>
        	<button class="close-button" data-close aria-label="Close modal" type="button">
			    <span aria-hidden="true"><i class="fas fa-times fa-2x"></i></span>
			</button>
		  	<h1 style="font-size: 50px;text-align:center;margin: 8rem auto;">This is Your Modal!</h1>
		</div>
		<!--class .main wraps the page content and closes right before <footer>-->
		<div class="main">
