<?php 

/*
Headline Block Template Partial
*/
$tag_type = get_sub_field('tag_type');
$headline = get_sub_field('headline');
$headline_max_width = get_sub_field('headline_max_width');
$headline_alignment = get_sub_field('headline_alignment');
$subtext = get_sub_field('subtext');
$subtext_max_width = get_sub_field('subtext_max_width');
$subtext_alignment = get_sub_field('subtext_alignment');

?>

<div class="headline_block">
	<?php if($tag_type == 'h1') : ?>
		<h1 style="max-width: <?php echo $headline_max_width; ?>px;text-align: <?php echo $headline_alignment; ?>;"><?php echo $headline; ?></h1>
		<?php if(!empty($subtext)) : ?>
			<h3 style="max-width: <?php echo $subtext_max_width; ?>px;text-align: <?php echo $subtext_alignment; ?>;"><?php echo $subtext; ?></h3>
		<?php endif; ?>
	<?php else : ?>
		<h2 style="max-width: <?php echo $headline_max_width; ?>px;text-align: <?php echo $headline_alignment; ?>;"><?php echo $headline; ?></h2>
		<?php if(!empty($subtext)) : ?>
			<h4 style="max-width: <?php echo $subtext_max_width; ?>px;text-align: <?php echo $subtext_alignment; ?>;"><?php echo $subtext; ?></h4>
		<?php endif; ?>
	<?php endif; ?>
</div>