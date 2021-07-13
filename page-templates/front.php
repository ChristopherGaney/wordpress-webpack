
<?php
/*
Template Name: Front
*/

get_header(); ?>


<?php

        if( have_rows('universal_fields') ):
    
            while ( have_rows('universal_fields') ) : the_row();

                if( get_row_layout() == 'full_slider' ):
 
                    get_template_part( 'template-parts/full-slider' );
 
                elseif( get_row_layout() == 'full_width_hero' ):
 
                    get_template_part( 'template-parts/full-width-hero' );

                elseif( get_row_layout() == 'centered_content' ):
 
                    get_template_part( 'template-parts/centered-content' );

                elseif( get_row_layout() == 'page_builder' ):
 
                    get_template_part( 'template-parts/page-builder' );

                elseif( get_row_layout() == 'accordion' ):
 
                    get_template_part( 'template-parts/accordion' );

                elseif( get_row_layout() == 'full_width_video' ):
 
                    get_template_part( 'template-parts/full-width-video' );

                elseif( get_row_layout() == 'contact' ):
 
                    get_template_part( 'template-parts/contact' );

                elseif( get_row_layout() == 'video_hero' ):
 
                    get_template_part( 'template-parts/video-hero' );

                elseif( get_row_layout() == 'wysiwyg_editor' ):
 
                    get_template_part( 'template-parts/wysiwyg-editor' );

                endif;

            endwhile;

        endif;

    ?>  
    


<?php get_footer();

