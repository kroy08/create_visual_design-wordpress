<?php

function creative_assets(){
    
    wp_enqueue_style('creative-style', get_template_directory_uri() . "./css/style.css", microtime());
    wp_enqueue_script('creative-script', get_template_directory_uri() . "./script/script.js", microtime(), [], true );
   
   
}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'creative_assets');

