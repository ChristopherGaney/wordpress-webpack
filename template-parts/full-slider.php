
<?php 
/*
This is the Slider Hero template part
*/

$section_id = get_sub_field('section_id');

?>

<section class="full-slider<?php if (!empty($section_id)): ?> <?php echo $section_id; ?><?php endif; ?>" role="banner">

	<div class="expanded row small-collapse" >
		
		<div class="owl_<?php if (!empty($section_id)): ?><?php echo $section_id; ?><?php endif; ?> owl-carousel small-12 column">
	 			
	 		<?php 

				$field_name = "slide";
				$field_count = 1;
				$back = '';

				if( have_rows($field_name) ):
			?>

			<?php while( have_rows($field_name) ): the_row(); ?> 
				
			<?php 
				
				$image_small_standard = get_sub_field('image_small_standard');
				$image_small_retina= get_sub_field('image_small_retina');
				$image_large_standard = get_sub_field('image_large_standard');
				$image_large_retina= get_sub_field('image_large_retina');
				
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

		        $dot_data = get_sub_field('slider_button_text');
				$data = '';
				if(!empty($dot_data)) {
					$data = $dot_data;
				}
				                
			?>

		    
			    <div class="slide_wrap" data-dot="<?php echo $data; ?>">
				    <div class="slide_div" <?php echo $back; ?>>
				
				      	<div class="grid-x">     
                            <div class="cell small-12">
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

							                elseif( get_row_layout() == 'button_block' ):
							 
							                    get_template_part( 'partials/button-block' );

							                endif;

							            endwhile;

							        endif;

							    ?>
                                      
                                </div>     
                            </div>
                        </div>
				     </div>
	  		   </div>
	  		
	  		<?php $field_count++; ?>
	  			
			<?php endwhile; endif; ?>
		
	  	</div>
	</div>
</section>
