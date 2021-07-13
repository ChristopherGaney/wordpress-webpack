<?php 

$header_search_placeholder = get_field('header_search_placeholder','option');

?>


<div class="search_wrapper">
    <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
                                        
        <input type="text" id="search_input" value="" class="text_input" name="s" placeholder="<?php echo $header_search_placeholder; ?>" autocomplete="off" data-swplive="true" />
        <input type="submit" name="hidden_input" value="Search" id="searchsubmit" />
    </form>
                                    
</div>