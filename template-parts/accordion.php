<?php 

/*
Accordion template
*/

$headline = get_sub_field('headline');
$section_id = get_sub_field('section_id');

?>

<section class="accordion-section<?php if (!empty($section_id)): ?> <?php echo $section_id; ?><?php endif; ?>">
    
    <div class="accordion_wrap">
        <h1><?php echo $headline; ?></h1>
        <div class="accordion_content_box">

            <ul class="accordion accordion_list" data-accordion data-allow-all-closed="true">

                <?php if( have_rows('items') ): ?>

                    <?php   $index = 1; ?>
                   
                    <?php while( have_rows('items') ): the_row(); ?>

                        <?php   $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $has_images = get_sub_field('has_images');
                                $class = ' large-12';
                                if($has_images) {
                                    $btn_copy = get_sub_field('btn_copy');
                                    //$btn_link = get_sub_field('btn_link');
                                    //$btn_target = get_sub_field('btn_target');
                                    $class = ' large-9';
                                }
                        ?>
                
                      <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <h2><?php echo $title; ?></h2>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <div class="grid-x inside_content">
                                <div class="cell small-12<?php echo $class; ?>">
                                    <p><?php echo $text; ?></p>
                                </div>
                                <?php if($has_images) : ?>
                                    <div class="cell small-12 large-3">
                                        <a class="button big drop_btn_link"><?php echo $btn_copy; ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if($has_images) : ?>
                                <div class="image_holder">
                                    <div class="dropdown_pane row clearfix" id="">
                                        <?php if( have_rows('dropdown_images') ): ?>
                       
                                            <?php while( have_rows('dropdown_images') ): the_row(); ?>

                                                <?php 
                                                    $image_standard = get_sub_field('image_standard');
                                                    $image_retina = get_sub_field('image_retina');
                                                    $alt = get_sub_field('alt_text');
                                                ?>

                                                <img alt="<?php echo $alt; ?>" <?php if (!empty($image_standard)): ?> data-interchange="[<?php echo $image_standard['url']; ?>, small]<?php if (!empty($image_retina)): ?>, [<?php echo $image_retina['url']; ?>, retina]<?php endif; ?>"<?php endif; ?>>

                                            <?php endwhile;endif; ?>
                                    
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                      </li>
                    
                    <?php  $index++; ?>
                    <?php endwhile;
                            endif; ?>

            </ul>
                  
        </div>
       
    </div>
   
</section>