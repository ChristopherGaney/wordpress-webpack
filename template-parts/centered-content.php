<?php 

/*
Centered Content template part
*/

$background = get_sub_field('background');
$back = '';
$section_id = get_sub_field('section_id');

switch ($background) {
    case 'image':
        $image_small_standard = get_sub_field('image_small_standard');
        $image_small_retina = get_sub_field('image_small_retina');
        $image_large_standard = get_sub_field('image_large_standard');
        $image_large_retina = get_sub_field('image_large_retina');
        if (!empty($image_small_standard)) { 
            $back = 'data-interchange="[' . $image_small_standard['url'] . ', small]';
            if (!empty($image_small_retina)) { $back .= ', [' . $image_small_retina['url'] . ', smallRetina]'; }
            if (!empty($image_large_standard)) { $back .= ', [' . $image_large_standard['url'] . ', medium]'; }
            if (!empty($image_large_retina)) { $back .= ', [' . $image_large_retina['url'] . ', mediumRetina]'; }
            $back .= '"';
        }
        elseif(!empty($image_large_standard)) {
            $back = 'data-interchange="[' . $image_large_standard['url'] . ', small]'; 
            if (!empty($image_large_retina)) { $back .= ', [' . $image_large_retina['url'] . ', retina]'; }
            $back .= '"';
        }
        break;
    case 'color':
        $background_color = get_sub_field('background_color');
        $back = 'style="background: ' . $background_color . '"';
        break;
    case 'none':
        break;
    default:
        break;
}

$sid = '';
if(!empty($section_id)) {
    $sid = ' ' . $section_id;
}

?>

<section class="centered_content<?php echo $sid; ?>" <?php echo $back; ?>>
    <div class="centered_wrapper">
        <?php

        if( have_rows('content_box') ):
    
            while ( have_rows('content_box') ) : the_row();
                
                if( get_row_layout() == 'headline_block' ):
                 
                    get_template_part( 'partials/headline-block' );

                elseif( get_row_layout() == 'paragraph_block' ):
 
                    get_template_part( 'partials/paragraph-block' );

                elseif( get_row_layout() == 'image_block' ):
 
                    get_template_part( 'partials/image-block' );

                elseif( get_row_layout() == 'list_block' ):
 
                    get_template_part( 'partials/list-block' );

                elseif( get_row_layout() == 'button_block' ):
 
                    get_template_part( 'partials/button-block' );

                
                endif;

            endwhile;

        endif;

    ?>
    </div>
</section>