<?php

function creative_custom_post(){
    $project_label = array(
        'name'     => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'    => __('Add Project', 'textdomain'),
        'edit_item'   => __('Edit Project', 'textdomain'),
        'add_new_item' => __('Add New Project', 'textdomain'),
        'all_items'   => __('Projects', 'textdomain'),
    );
    $project = array(
        'labels' => $project_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('projects', $project);

    $service_label = array(
        'name'     => __('services', 'textdomain'),
        'singular_name' => __('service', 'textdomain'),
        'add_new'    => __('Add service', 'textdomain'),
        'edit_item'   => __('Edit service', 'textdomain'),
        'add_new_item' => __('Add New service', 'textdomain'),
        'all_items'   => __('services', 'textdomain'),
    );
    $service = array(
        'labels' => $service_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );
    register_post_type('services', $service);


    $recent_label = array(
        'name'     => __('Recents', 'textdomain'),
        'singular_name' => __('Recent', 'textdomain'),
        'add_new'    => __('Add Recent', 'textdomain'),
        'edit_item'   => __('Edit Recent', 'textdomain'),
        'add_new_item' => __('Add New Recent', 'textdomain'),
        'all_items'   => __('Recents', 'textdomain'),
    );
    $recent = array(
        'labels' => $recent_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('recents', $recent);

    $latest_label = array(
        'name'     => __('Latests', 'textdomain'),
        'singular_name' => __('Latest', 'textdomain'),
        'add_new'    => __('Add Latest', 'textdomain'),
        'edit_item'   => __('Edit Latest', 'textdomain'),
        'add_new_item' => __('Add New Recent', 'textdomain'),
        'all_items'   => __('Latests', 'textdomain'),
    );
    $latest = array(
        'labels' => $latest_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('latests', $latest);

    $post_label = array(
        'name'     => __('Posts', 'textdomain'),
        'singular_name' => __('Post', 'textdomain'),
        'add_new'    => __('Add Post', 'textdomain'),
        'edit_item'   => __('Edit Post', 'textdomain'),
        'add_new_item' => __('Add New Recent', 'textdomain'),
        'all_items'   => __('Posts', 'textdomain'),
    );
    $post = array(
        'labels' => $post_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('posts', $post);


    



}
add_action('init', 'creative_custom_post');