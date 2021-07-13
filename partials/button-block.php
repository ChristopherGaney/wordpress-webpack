<?php 

/*
Button Block Template Partial
*/

$btn_copy = get_sub_field('button_copy');
$btn_link = get_sub_field('button_link');
$btn_target = get_sub_field('button_target');
$button_alignment = get_sub_field('button_alignment');
$button_hollow = get_sub_field('button_hollow');

$hollow = '';
if($button_hollow) {
	$hollow = ' hollow';
}
?>

<div class="button_block" style="text-align: <?php echo $button_alignment; ?>;">
	<a class="button<?php echo $hollow; ?>" href="<?php echo $btn_link; ?>" target="<?php echo $btn_target; ?>"><?php echo $btn_copy; ?></a>
</div>