<?php

 
get_header(); ?>

<?php 

$post_page_image_standard = get_field('post_page_image_standard', 'option');
$post_page_image_retina = get_field('post_page_image_retina', 'option');
$post_page_headline = get_field('post_page_headline', 'option');
$post_page_subtext = get_field('post_page_subtext', 'option');

$cols = 6;
$single = '';
if(is_singular()) {
	$cols = 12;
	$single = ' singular';
}

?>

<section class="post_page_header">
     <div class="header_image" <?php if (!empty($post_page_image_standard)): ?> data-interchange="[<?php echo $post_page_image_standard['url']; ?>, small]<?php if (!empty($post_page_image_retina)): ?>, [<?php echo $post_page_image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>  
        <div class="centered_wrapper">
            <div class="headline_block">
                <h1><?php echo $post_page_headline; ?></h1>
                <p><?php echo $post_page_subtext; ?></p>
            </div>
        </div>
    </div> 
</section>
<section class="post_page_container<?php echo $single; ?>">
        <div class="post_wrapper">
            
         <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); 

                $postId = get_the_ID();
                $image_standard = get_field('image_standard', $postId);
                $image_retina = get_field('image_retina', $postId);

                ?>


                <div class="grid-x content">
                    <div class="cell small-12 large-<?php echo $cols; ?> image_box">
                        <a href="<?php the_permalink(); ?>" target="_self"><div <?php if (!empty($image_standard)): ?> data-interchange="[<?php echo $image_standard['url']; ?>, small]<?php if (!empty($image_retina)): ?>, [<?php echo $image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>></div></a>
                    </div>
                    <div class="cell small-12 large-<?php echo $cols; ?> post_box">
                            <div class="text_div">
                                <p class="the_date"><?php echo get_the_date(); ?></p>
                                <a href="<?php the_permalink(); ?>" target="_self"><h2 id="post_name" class="post_title"><?php the_title(); ?></h2></a>
                                <p class="excerpt"><?php the_excerpt(); ?></p>
                            </div>
                    </div>
                </div>
            <?php endwhile;?>
            <?php endif; ?>
            
        </div>
</section>


<?php get_footer();