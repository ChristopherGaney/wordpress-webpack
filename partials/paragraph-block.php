<?php 

/*
Paragraph Block Template Partial
*/

$paragraph = get_sub_field('paragraph');
$paragraph_max_width = get_sub_field('paragraph_max_width');
$paragraph_alignment = get_sub_field('paragraph_alignment');

?>

<div class="paragraph_block">
	<p style="max-width: <?php echo $paragraph_max_width; ?>px;text-align: <?php echo $paragraph_alignment; ?>;"><?php echo $paragraph; ?></p>
</div>