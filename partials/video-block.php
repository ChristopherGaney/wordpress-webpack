<?php 

/*
Full Width Video template part
*/

$poster = get_sub_field('poster_image');
$webm = get_sub_field('webm');
$mp4 = get_sub_field('mp4');

?>

<div class="video_block">
        <video poster="<?php echo $poster['url']; ?>" autoplay playsinline loop muted>
		    <source src="<?php echo $webm; ?>" type="video/webm">
            <source src="<?php echo $mp4; ?>" type="video/mp4">

		    Sorry, your browser doesn't support embedded videos.
        </video>    
</div>