
<?php 
/*
This is the Full Width Hero template part
*/

$image_standard = get_sub_field('image_standard');
$image_retina = get_sub_field('image_retina');

$headline = get_sub_field('headline');
$headline_max_width = get_sub_field('headline_max_width');
$subtext = get_sub_field('subtext');
$subtext_max_width = get_sub_field('subtext_max_width');

$has_button = get_sub_field('has_button');
$btn_copy = get_sub_field('button_copy');
$btn_link = get_sub_field('button_link');
$btn_target = get_sub_field('button_target');

$section_id = get_sub_field('section_id');

$h_width = 'none';
$s_width = 'none';
if($headline_max_width) {
    $h_width = $headline_max_width . 'px';
}
if($subtext_max_width) {
    $s_width = $subtext_max_width . 'px';
}


?>


<section class="interior_hero<?php if (!empty($section_id)): ?> <?php echo $section_id; ?><?php endif; ?>">
    <div class="header_image" <?php if (!empty($image_standard)): ?> data-interchange="[<?php echo $image_standard['url']; ?>, small]<?php if (!empty($image_retina)): ?>, [<?php echo $image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>

        <?php if(is_page_template( 'page-templates/front.php' )) : ?>
            <canvas id="the_canvas" class="home_hero_canvas"></canvas>
        <?php endif; ?>

        <div class="grid-x grid-padding-x align-middle text-container">
            <div class="cell small-12">
                <div class="header_text">
                    <h1 style="max-width:<?php echo $h_width; ?>;"><?php echo $headline; ?></h1>
                    <p style="max-width:<?php echo $s_width; ?>;"><?php echo $subtext; ?></p>
                </div>
                <?php if($has_button): ?>
                <div class="hero_links">
                    <a href="<?php echo $btn_link; ?>" class="button hollow" target="<?php echo $btn_target; ?>"><?php echo $btn_copy; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>