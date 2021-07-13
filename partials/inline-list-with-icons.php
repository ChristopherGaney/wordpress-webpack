<?php 

/*
List Block Template Partial
*/

$list_alignment = get_sub_field('list_alignment');
$list_max_width = get_sub_field('list_max_width');
$bullets_or_icons = get_sub_field('bullets_or_icons');
$space_between = get_sub_field('space_between');

$bullets = 'none';
$bullet_class = '';
if($bullets_or_icons == 'bullets') {
	$bullets = 'disc';
	$bullet_class = ' bullets';
}
if($list_alignment == 'left') {
	$margin = 'margin-right: ' . $space_between . 'px;';
}
else {
	$margin = 'margin-right: ' . ($space_between/2) . 'px;margin-left: ' . ($space_between/2) . 'px;';
}
?>

<div class="inline_list_with_icons">
	<ul class="clearfix<?php echo $bullet_class; ?>" style="max-width: <?php echo $list_max_width; ?>px;list-style-type: <?php echo $bullets; ?>;text-align: <?php echo $list_alignment; ?>;">
	<?php 

		if( have_rows('list') ): 

			 while( have_rows('list') ): the_row(); ?> 
				
			<?php 
				
				$list_item = get_sub_field('list_item');
				$list_icon_standard = get_sub_field('list_icon_standard');
				$list_icon_retina = get_sub_field('list_icon_retina');
				$list_icon_svg = get_sub_field('list_icon_svg');
                
			?>

			<li style="<?php echo $margin; ?>">
				<?php if(!empty($list_icon_standard)) : ?>
					<img <?php if (!empty($list_icon_standard)): ?> data-interchange="[<?php echo $list_icon_standard['url']; ?>, small]<?php if (!empty($list_icon_retina)): ?>, [<?php echo $list_icon_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>
				<?php elseif(!empty($list_icon_svg)) : ?>
					<img src="<?php echo $list_icon_svg['url']; ?>">
				<?php endif; ?>
				<p><?php echo $list_item; ?></p>
			</li>

	<?php endwhile; endif; ?>
	</ul>

</div>