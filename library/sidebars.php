<?php 

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    register_sidebar( array(
            'name'          => 'Footer',
            'id'            => 'footer',
            'before_widget' => '<div class="cell footer-widget"><div>',
            'after_widget'  => '</div></div>',        
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
    ) );     
}

?>