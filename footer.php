<?php

$footer_logo_svg = get_field('footer_logo_svg','option');

$address_line_one = get_field('address_line_one','option');
$address_line_two = get_field('address_line_two','option');

$facebook_url = get_field('facebook_url','option');
$youtube_url = get_field('youtube_url','option');
$linkedin_url = get_field('linkedin_url','option');
$copyright = get_field('copyright','option');
$privacy_policy_link = get_field('privacy_policy_link','option');
$privacy_policy_target = get_field('privacy_policy_target','option');
$privacy_policy_copy = get_field('privacy_policy_copy','option');


?>
            </div><!-- close class="main" -->
            <footer class="footer" role="contentinfo">
                <div class="top_bar">
                    <div class="grid-x">
                        <div class="cell small-12 large-3">
                          <div class="footer_logo_wrap">
                            <a href="<?php echo home_url(); ?>" class="logo">
                                <img src="<?php echo $footer_logo_svg['url']; ?>" alt="Logo">
                            </a>
                            <div class="address address_small">
                                <p><?php echo $address_line_one; ?></p>
                                <p><?php echo $address_line_two; ?></p>
                            </div>
                          </div>     
                        </div>
                        <!--This cell is hidden on small screens. The Font Awesome <i> tags will be replaced with SVG's-->
                        <div class="cell large-3 large_social">
                            <div class="social_nav_wrapper">
                                <a href="<?php echo $facebook_url; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="<?php echo $youtube_url; ?>" target="_blank"><i class="fab fa-youtube-square"></i></a>
                                <a href="<?php echo $linkedin_url; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                            </div>   
                        </div>
                        <div class="cell small-12 large-6">
                             <nav class="nav" role="navigation">
                                <?php footer_nav(); ?>
                            </nav>   
                                               
                        </div>   
                    </div>
                </div>
                <div class="bottom_bar">
                    <div class="grid-x">
                        <!--This cell is hidden on large screens. The Font Awesome <i> tags will be replaced with SVG's-->
                        <div class="cell small-12 small_social">
                            <div class="social_nav_wrapper">
                                <a href="<?php echo $facebook_url; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="<?php echo $youtube_url; ?>" target="_blank"><i class="fab fa-youtube-square"></i></a>
                                <a href="<?php echo $linkedin_url; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                            </div>   
                        </div>
                        <div class="cell small-12 copyright_cell">
                            <div class="copyright">&copy;<?php echo date('Y'); ?> <?php echo $copyright; ?></div>
                            <?php if(!empty($privacy_policy_copy)) : ?>
                                <a class="privacy_policy" href="<?php echo $privacy_policy_link; ?>" target="<?php echo $privacy_policy_target; ?>"><?php echo $privacy_policy_copy; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>                 
                </div>            
            </footer>
            </div> <!-- Off Canvas Content-->
            </div><!-- Off Canvas Wrapper-->
        

        <?php wp_footer(); ?>
        
    </body>
</html>