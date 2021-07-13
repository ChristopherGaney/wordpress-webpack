<?php 


$logo = get_sub_field('logo');
$overlay_image = get_sub_field('overlay_image');
$first_frame_image = get_sub_field('first_frame_image');
$header_text = get_sub_field('header_text');
$webm = get_sub_field('webm_video');
$mp4 = get_sub_field('mp4_video');
$section_id = get_sub_field('section_id');

$sid = '';
if(!empty($section_id)) {
    $sid = ' ' . $section_id;
}

?>

<section class="vid_hero<?php echo $sid; ?>">
    <div class="video_holder">
        <div class="responsive-embed">
            <video id="slider_vid" poster="<?php echo $first_frame_image['url']; ?>" autoplay playsinline loop muted>
                <source src="<?php echo $webm; ?>" type="video/webm">
                <source src="<?php echo $mp4; ?>" type="video/mp4">

                    Sorry, your browser doesn't support embedded videos.
            </video>
        </div>
        <div class="vid_overlay" style="background: url('<?php echo $overlay_image['url']; ?>');"></div> 
    </div>
    <div class="column-12">
        <div class="logo_wrap">
            <img class="logo_large" src="<?php echo $logo['url']; ?>" />
            <div class="home_text">
                <h2><?php echo $header_text; ?></h2>
            </div>
        </div>
    </div>
</section>