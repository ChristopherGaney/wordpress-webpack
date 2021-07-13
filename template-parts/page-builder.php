<?php 

/*
Page Builder Template Part
*/

$margin = get_sub_field('margin');
$section_id = get_sub_field('section_id');
$limit_columns = get_sub_field('limit_columns');
$column_limit = get_sub_field('column_limit');
$reverse_mobile = get_sub_field('reverse_mobile');

$marg = '';
if($margin == 0) {
    $marg = 'padding-bottom: 0;';
}

$sid = '';
if(!empty($section_id)) {
    $sid = ' ' . $section_id;
}

$reverse = '';
if($reverse_mobile) {
    $reverse = ' reverse_mobile';
}

?>

<section class="page_builder<?php echo $sid; ?>" style="<?php echo $marg; ?>">
        <div class="grid-x<?php echo $reverse; ?>">

            <?php 

                $field_name = "content_boxes";
    
                if($limit_columns) {
                    $field_count = $column_limit;
                }
                else {
                    $flds = get_sub_field($field_name);
                    if(is_array($flds)) {
                      $field_count = count($flds);
                    }
                    else {
                        $field_count = 1;
                    }
                }
                if($field_count == 5) {
                    $num = 2;
                }
                else {
                    $num = 12 / $field_count;
                }
                $ind = 1;
                if( have_rows($field_name) ):

                    while( have_rows($field_name) ): the_row();

                    $background = get_sub_field('background');
                    $back = '';

                    switch ($background) {
                        case 'image':
                            $image_small_standard = get_sub_field('image_small_standard');
                            $image_small_retina = get_sub_field('image_small_retina');
                            $image_large_standard = get_sub_field('image_large_standard');
                            $image_large_retina = get_sub_field('image_large_retina');
                            /*if (!empty($image_standard)) { 
                                $back = 'data-interchange="[' . $image_standard['url'] . ', small]'; 
                                if (!empty($image_retina)) { $back .= ', [' . $image_retina['url'] . ', retina]'; }
                                $back .= '"';
                            }*/

                            /////////////////////////////////////////////////
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

                            ////////////////////////////////////////////////
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

                    $box_id = get_sub_field('box_id');

                    $box_class = '';
                    if(!empty($box_id)) {
                        $box_class = ' ' . $box_id;
                    }
                    

            ?>

            <div class="cell small-12 large-<?php echo $num; ?> cell-<?php echo $ind; ?><?php echo $box_class; ?>" <?php echo $back; ?>>
               
                <?php if($section_id == 'homepage_gallery') : ?>
                    <div class="image_holder" <?php echo $back; ?>></div>
                <?php endif; ?>
                    <div class="inside_box">
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

                                elseif( get_row_layout() == 'inline_list_with_icons' ):
                 
                                    get_template_part( 'partials/inline-list-with-icons' );

                                elseif( get_row_layout() == 'button_block' ):
                 
                                    get_template_part( 'partials/button-block' );

                                 elseif( get_row_layout() == 'video_block' ):
                 
                                    get_template_part( 'partials/video-block' );

                                endif;

                            endwhile;

                        endif;

                    ?>
                    </div>
              
            </div>
                
            <?php $ind++;

            endwhile; endif; ?>
            
        </div>
</section>