<?php 


$form_text = get_sub_field('form_text');
$form_id = get_sub_field('form_id');

?>

<section class="contact_page">
    <div class="form_wrap">
        <h3><?php echo $form_text; ?></h3>
        <div>
            <?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true"]'); ?>
        </div>
    </div>
</section>