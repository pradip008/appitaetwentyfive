<?php

// Register Custom Post Type "Our Services"
function create_our_services_post_type() {
    $labels = array(
        'name'                  => _x('Our Services', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Our Services', 'textdomain'),
        'name_admin_bar'        => __('Service', 'textdomain'),
        'archives'              => __('Service Archives', 'textdomain'),
        'attributes'            => __('Service Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Service:', 'textdomain'),
        'all_items'             => __('All Services', 'textdomain'),
        'add_new_item'          => __('Add New Service', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Service', 'textdomain'),
        'edit_item'             => __('Edit Service', 'textdomain'),
        'update_item'           => __('Update Service', 'textdomain'),
        'view_item'             => __('View Service', 'textdomain'),
        'view_items'            => __('View Services', 'textdomain'),
        'search_items'          => __('Search Service', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
        'featured_image'        => __('Featured Image', 'textdomain'),
        'set_featured_image'    => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image'    => __('Use as featured image', 'textdomain'),
        'insert_into_item'      => __('Insert into service', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this service', 'textdomain'),
        'items_list'            => __('Services list', 'textdomain'),
        'items_list_navigation' => __('Services list navigation', 'textdomain'),
        'filter_items_list'     => __('Filter services list', 'textdomain'),
    );
    $args = array(
        'label'                 => __('Service', 'textdomain'),
        'description'           => __('Custom post type for Our Services', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-laptop', // Choose an icon from the Dashicons library
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Enable for Gutenberg editor
    );
    register_post_type('our-services', $args);
}
add_action('init', 'create_our_services_post_type', 0);

// Register Custom Post Type "Testimonials"
function custom_post_type_testimonial() {
    $labels = array(
        'name'               => _x('Testimonials', 'Post Type General Name', 'textdomain'),
        'singular_name'      => _x('Testimonial', 'Post Type Singular Name', 'textdomain'),
        'menu_name'          => __('Testimonials', 'textdomain'),
        'name_admin_bar'     => __('Testimonial', 'textdomain'),
        'archives'           => __('Testimonial Archives', 'textdomain'),
        'attributes'         => __('Testimonial Attributes', 'textdomain'),
        'parent_item_colon'  => __('Parent Testimonial:', 'textdomain'),
        'all_items'          => __('All Testimonials', 'textdomain'),
        'add_new_item'       => __('Add New Testimonial', 'textdomain'),
        'add_new'            => __('Add New', 'textdomain'),
        'new_item'           => __('New Testimonial', 'textdomain'),
        'edit_item'          => __('Edit Testimonial', 'textdomain'),
        'update_item'        => __('Update Testimonial', 'textdomain'),
        'view_item'          => __('View Testimonial', 'textdomain'),
        'view_items'         => __('View Testimonials', 'textdomain'),
        'search_items'       => __('Search Testimonial', 'textdomain'),
        'not_found'          => __('Not Found', 'textdomain'),
        'not_found_in_trash' => __('Not Found in Trash', 'textdomain'),
        'featured_image'     => __('Featured Image', 'textdomain'),
        'set_featured_image' => __('Set Featured Image', 'textdomain'),
        'remove_featured_image' => __('Remove Featured Image', 'textdomain'),
        'use_featured_image' => __('Use as Featured Image', 'textdomain'),
        'insert_into_item'   => __('Insert into Testimonial', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this Testimonial', 'textdomain'),
        'items_list'         => __('Testimonials list', 'textdomain'),
        'items_list_navigation' => __('Testimonials list navigation', 'textdomain'),
        'filter_items_list'  => __('Filter Testimonials list', 'textdomain'),
    );

    $args = array(
        'label'               => __('Testimonial', 'textdomain'),
        'description'         => __('Testimonials for your site', 'textdomain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-quote',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => false,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true, // Enable Gutenberg editor
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'custom_post_type_testimonial', 0);


// Register Custom Post Type "FAQs"
function create_faq_post_type() {
    $labels = array(
        'name'                  => _x('FAQs', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('FAQ', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('FAQs', 'textdomain'),
        'name_admin_bar'        => __('FAQ', 'textdomain'),
        'archives'              => __('FAQ Archives', 'textdomain'),
        'attributes'            => __('FAQ Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent FAQ:', 'textdomain'),
        'all_items'             => __('All FAQs', 'textdomain'),
        'add_new_item'          => __('Add New FAQ', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New FAQ', 'textdomain'),
        'edit_item'             => __('Edit FAQ', 'textdomain'),
        'update_item'           => __('Update FAQ', 'textdomain'),
        'view_item'             => __('View FAQ', 'textdomain'),
        'view_items'            => __('View FAQs', 'textdomain'),
        'search_items'          => __('Search FAQ', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
        'featured_image'        => __('Featured Image', 'textdomain'),
        'set_featured_image'    => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image'    => __('Use as featured image', 'textdomain'),
        'insert_into_item'      => __('Insert into FAQ', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this FAQ', 'textdomain'),
        'items_list'            => __('FAQs list', 'textdomain'),
        'items_list_navigation' => __('FAQs list navigation', 'textdomain'),
        'filter_items_list'     => __('Filter FAQs list', 'textdomain'),
    );
    $args = array(
        'label'                 => __('FAQ', 'textdomain'),
        'description'           => __('Frequently Asked Questions', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-help',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('faq', $args);
}
add_action('init', 'create_faq_post_type', 0);

// Register Portfolio Custom Post Type
function custom_portfolio_post_type() {
    $labels = array(
        'name'                  => _x('Portfolios', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Portfolio', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Portfolios', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Portfolio', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Portfolio', 'textdomain'),
        'new_item'              => __('New Portfolio', 'textdomain'),
        'edit_item'             => __('Edit Portfolio', 'textdomain'),
        'view_item'             => __('View Portfolio', 'textdomain'),
        'all_items'             => __('All Portfolios', 'textdomain'),
        'search_items'          => __('Search Portfolios', 'textdomain'),
        'not_found'             => __('No portfolios found.', 'textdomain'),
        'not_found_in_trash'    => __('No portfolios found in Trash.', 'textdomain'),
        'featured_image'        => _x('Portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type.', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type.', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type.', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type.', 'textdomain'),
        'archives'              => _x('Portfolio archives', 'The post type archive label.', 'textdomain'),
        'insert_into_item'      => _x('Insert into portfolio', 'Overrides the “Insert into post”/item phrase for this post type.', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this portfolio', 'Overrides the “Uploaded to this post”/item phrase for this post type.', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'custom_portfolio_post_type');

// Register Portfolio Category Taxonomy
function custom_portfolio_taxonomy() {
    $labels = array(
        'name'              => _x('Portfolio Categories', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Portfolio Category', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Portfolio Categories', 'textdomain'),
        'all_items'         => __('All Portfolio Categories', 'textdomain'),
        'parent_item'       => __('Parent Portfolio Category', 'textdomain'),
        'parent_item_colon' => __('Parent Portfolio Category:', 'textdomain'),
        'edit_item'         => __('Edit Portfolio Category', 'textdomain'),
        'update_item'       => __('Update Portfolio Category', 'textdomain'),
        'add_new_item'      => __('Add New Portfolio Category', 'textdomain'),
        'new_item_name'     => __('New Portfolio Category Name', 'textdomain'),
        'menu_name'         => __('Portfolio Categories', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
    );

    register_taxonomy('portfolio-category', array('portfolio'), $args);
}
add_action('init', 'custom_portfolio_taxonomy');





