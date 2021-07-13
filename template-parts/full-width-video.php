<?php 


/*
Full Width Video template part
*/

$poster = get_sub_field('poster_image');
$webm = get_sub_field('webm_video');
$mp4 = get_sub_field('mp4_video');
$max_width = get_sub_field('max_width');
$section_id = get_sub_field('section_id');

if($max_width == 'none') {
    $width = 'none';
}
else {
    $width = (int) $max_width . 'px';
}

?>

<section class="full-width-video<?php if (!empty($section_id)): ?> <?php echo $section_id; ?><?php endif; ?>">
	<div class="centered_wrapper" style="max-width: <?php echo $width; ?>;">
            <video poster="<?php echo $poster['url']; ?>" controls onloadstart="this.volume=0.4">
                <!--<source src="<?php echo $webm['url']; ?>" type="video/webm">
			    <source src="<?php echo $mp4['url']; ?>" type="video/mp4">-->
			    <source src="<?php echo $webm; ?>" type="video/webm">
                <source src="<?php echo $mp4; ?>" type="video/mp4">

			    Sorry, your browser doesn't support embedded videos.
            </video>    
	</div>
</section>
