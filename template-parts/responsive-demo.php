<?php 
/*
This is the Responsive Demo template part
*/

$image_standard = get_sub_field('image_standard');
$image_retina = get_sub_field('image_retina');

$mobile_image_standard = get_sub_field('mobile_image_standard');
$mobile_image_retina = get_sub_field('mobile_image_retina');

$left_image_standard = get_sub_field('left_image_standard');
$left_image_retina = get_sub_field('left_image_retina');

$right_image_standard = get_sub_field('right_image_standard');
$right_image_retina = get_sub_field('right_image_retina');

?>


<section class="responsive_demo one">
    <div class="desktop_wrap" <?php if (!empty($image_standard)): ?> data-interchange="[<?php echo $image_standard['url']; ?>, small]<?php if (!empty($image_retina)): ?>, [<?php echo $image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>
    	<div class="left_hider"></div>
    	<div class="right_hider"></div>
        <div class="tablet_wrap">
            <div class="mobile_wrap">
                
            </div>
        </div>
    </div>
</section>
<section class="responsive_demo two">
    <div class="desktop_wrap" <?php if (!empty($image_standard)): ?> data-interchange="[<?php echo $image_standard['url']; ?>, small]<?php if (!empty($image_retina)): ?>, [<?php echo $image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>
    	<div class="left_hider"></div>
    	<div class="right_hider"></div>
        <div class="tablet_wrap">
            <div class="mobile_wrap">
                
            </div>
        </div>
    </div>
</section>
<section class="responsive_demo three">
    <div class="desktop_wrap" <?php if (!empty($image_standard)): ?> data-interchange="[<?php echo $image_standard['url']; ?>, small]<?php if (!empty($image_retina)): ?>, [<?php echo $image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>
        <div class="tablet_wrap" <?php if (!empty($mobile_image_standard)): ?> data-interchange="[<?php echo $mobile_image_standard['url']; ?>, small]<?php if (!empty($mobile_image_retina)): ?>, [<?php echo $mobile_image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>
        	<div class="left_hider"></div>
    		<div class="right_hider"></div>
            <div class="mobile_wrap">
                
            </div>
        </div>
    </div>
</section>
<section class="responsive_demo four">
    <div class="desktop_wrap" <?php if (!empty($image_standard)): ?> data-interchange="[<?php echo $image_standard['url']; ?>, small]<?php if (!empty($image_retina)): ?>, [<?php echo $image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>
    	<div class="left_hider"></div>
    	<div class="right_hider"></div>
        <div class="tablet_wrap">
            <div class="mobile_wrap">
                <div class="mobile_note">At screens wider than 639px we use Desktop images. =====></div>
            </div>
        </div>
    </div>
</section>
<section class="responsive_demo five">
    <div class="desktop_wrap">
    	<div class="inner_wrap">
	        <div class="col left">
	        	<div class="image_holder" <?php if (!empty($left_image_standard)): ?> data-interchange="[<?php echo $left_image_standard['url']; ?>, small]<?php if (!empty($left_image_retina)): ?>, [<?php echo $left_image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>></div>
	        </div>
	        <div class="col right">
	        	<div class="image_holder" <?php if (!empty($right_image_standard)): ?> data-interchange="[<?php echo $right_image_standard['url']; ?>, small]<?php if (!empty($right_image_retina)): ?>, [<?php echo $right_image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>></div>
	        </div>
	    </div>
    </div>
</section>
<section class="responsive_demo six">
    <div class="desktop_wrap">
    	<div class="inner_wrap">
	        <div class="col left">
	        	<div class="image_holder" <?php if (!empty($left_image_standard)): ?> data-interchange="[<?php echo $left_image_standard['url']; ?>, small]<?php if (!empty($left_image_retina)): ?>, [<?php echo $left_image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>></div>
	        </div>
	        <div class="col right">
	        	<div class="image_holder" <?php if (!empty($right_image_standard)): ?> data-interchange="[<?php echo $right_image_standard['url']; ?>, small]<?php if (!empty($right_image_retina)): ?>, [<?php echo $right_image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>></div>
	        </div>
	    </div>
    </div>
</section>


