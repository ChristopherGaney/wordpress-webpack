<?php 

/*
Image Block Template Partial
*/

$mobile_image_standard = get_sub_field('mobile_image_standard');
$mobile_image_retina = get_sub_field('mobile_image_retina');
$image_standard = get_sub_field('image_standard');
$image_retina = get_sub_field('image_retina');
$image_alignment = get_sub_field('image_alignment');
$alt = get_sub_field('alt_text');


if (!empty($mobile_image_standard)) { 
    $back = 'data-interchange="[' . $mobile_image_standard['url'] . ', small]';
    if (!empty($mobile_image_retina)) { $back .= ', [' . $mobile_image_retina['url'] . ', smallRetina]'; }
    if (!empty($image_standard)) { $back .= ', [' . $image_standard['url'] . ', medium]'; }
    if (!empty($image_retina)) { $back .= ', [' . $image_retina['url'] . ', mediumRetina]'; }
    $back .= '"';
}
elseif(!empty($image_standard)) {
    $back = 'data-interchange="[' . $image_standard['url'] . ', small]'; 
    if (!empty($image_retina)) { $back .= ', [' . $image_retina['url'] . ', retina]'; }
    $back .= '"';
}


?>

<div class="image_block" style="text-align: <?php echo $image_alignment; ?>;">
	<img alt="<?php echo $alt; ?>" <?php echo $back; ?>>
</div>
