<?php


function custom_posts_per_page($query) {
    if (is_home()) {
        $query->set('posts_per_page', 6);
    }

    if (is_category()) {
        $query->set('posts_per_page', 12);
    } //endif
} //function

//this adds the function above to the 'pre_get_posts' action     
add_action('pre_get_posts', 'custom_posts_per_page');


?>