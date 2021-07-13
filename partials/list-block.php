<?php 

/*
List Block Template Partial
*/

$list_alignment = get_sub_field('list_alignment');
$list_max_width = get_sub_field('list_max_width');
$has_bullets = get_sub_field('has_bullets');

$bullets = 'none';
$bullet_class = '';
if($has_bullets) {
	$bullets = 'disc';
	if($list_alignment == 'left') {
		$bullet_class = 'bullets_left';
	}
	else {
		$bullet_class = 'bullets_center';
	}
}

?>

<div class="list_block">
	<ul class="<?php echo $bullet_class; ?>" style="max-width: <?php echo $list_max_width; ?>px;list-style-type: <?php echo $bullets; ?>;">
	<?php 

		if( have_rows('list') ): 

			 while( have_rows('list') ): the_row(); ?> 
				
			<?php 
				
				$list_item = get_sub_field('list_item');
                
			?>

			<li style="text-align: <?php echo $list_alignment; ?>;"><?php echo $list_item; ?></li>

	<?php endwhile; endif; ?>
	</ul>

</div>