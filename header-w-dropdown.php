<?php 

$header_logo_standard = get_field('header_logo_standard','option');
$header_logo_retina = get_field('header_logo_retina','option');
$header_logo_svg = get_field('header_logo_svg','option');
$search_icon_svg = get_field('search_icon_svg','option');
$search_hover_svg = get_field('search_hover_svg','option');
$header_cta_copy = get_field('header_cta_copy','option');
$header_cta_link = get_field('header_cta_link','option');
$header_search_copy = get_field('header_search_copy','option');


?>


<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://use.typekit.net/yoa4prj.css">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        
        <div class="page-container">
            <header class="header" id="header" role="banner">
                <div class="top_bar">
                    <div class="grid-x align-middle">
                        <div class="cell small-4 sandwich">
                            <div class="menu-panel-button">
                                <div class="button_container" id="toggle" data-toggle="offCanvas">
                                    <span class="top"></span>
                                    <span class="middle"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>             
                        </div>
                        <div class="cell small-4 large-2">
                            <a href="<?php echo home_url(); ?>" class="header_logo">
                                <img src="<?php echo $header_logo_svg['url']; ?>" alt="Logo">
                            </a>                    
                        </div>
                        <div class="cell small-4 large-10">
                            <div class="search_and_button">
                                <ul class="menu">
                                    <li id="search_icon" class="menu-item menu-item-type-post_type menu-item-object-page search">
                                        <div class="icon_wrap">
                                            <img class="s_icon" src="<?php echo $search_icon_svg['url']; ?>" alt="Search">
                                            <img id="search_icon_hover" class="s_hover" src="<?php echo $search_hover_svg['url']; ?>" alt="Search">
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page cta">
                                        <a id="main_cta" href="<?php echo $header_cta_link; ?>" class="button"><?php echo $header_cta_copy; ?></a>
                                    </li>
                                </ul>
                            </div>         
                            <nav class="nav" id="navi" role="navigation">
                                
                                <?php
                                     if (has_nav_menu('header-top-nav')) {                       
                                         wp_nav_menu(array(
                                             'theme_location' => 'header-top-nav',
                                             'depth' => 1,
                                             )
                                         );
                                     }
                                 ?>
                                 <div id="nav_over" class="nav_overlay"></div>    
                            </nav>
                              
                        </div>                
                    </div>
                </div>
                <div class="bottom_bar">
                    <div class="grid-x">
                        <div id="search_down" class="cell small-12 search_wrap">
                            <div id="menu-search_icon" class="site_search"> 
                                <?php get_search_form(); ?>
                                <div id="search_submit_btn" class="submit_search_btn">
                                     <a id="submit_btn" href="javascript:void(0)" class="button secondary hollow"><?php echo $header_search_copy ?></a>  
                                </div>
                            </div>    
                        </div>
                        <div id="nav_down" class="cell small-12 nav_wrap">
                              <?php
                                     if (has_nav_menu('header-sub1')) {                       
                                         wp_nav_menu(array(
                                             'theme_location' => 'header-sub1',
                                             'depth' => 1,
                                             )
                                         );
                                     }
                                     if (has_nav_menu('header-sub2')) {                       
                                         wp_nav_menu(array(
                                             'theme_location' => 'header-sub2',
                                             'depth' => 1,
                                             )
                                         );
                                     }
                                     
                                 ?>
                        </div>                         
                    </div>
                </div>
                
            </header>


        <?php
       
           get_template_part('template-parts/offcanvas');
            
        ?>








