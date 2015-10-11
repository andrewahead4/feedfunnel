<?php

add_action( 'init', 'register_cpt_blog' );

function register_cpt_blog() {

    $labels = array( 
        'name' => _x( 'Blogs', 'blog' ),
        'singular_name' => _x( 'Blog', 'blog' ),
        'add_new' => _x( 'Add New', 'blog' ),
        'add_new_item' => _x( 'Add New blog', 'blog' ),
        'edit_item' => _x( 'Edit blog', 'blog' ),
        'new_item' => _x( 'New blog', 'blog' ),
        'view_item' => _x( 'View blog', 'blog' ),
        'search_items' => _x( 'Search blogs', 'blog' ),
        'not_found' => _x( 'No blogs found', 'blog' ),
        'not_found_in_trash' => _x( 'No blogs found in Trash', 'blog' ),
        'parent_item_colon' => _x( 'Parent blog:', 'blog' ),
        'menu_name' => _x( 'Blogs', 'blog' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'A list of external blogs',
        'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'comments' ),
        'taxonomies' => array( 'txblogs' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'show_in_rest' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'blog', $args );
}

add_action( 'init', 'register_cpt_blog_entry' );

function register_cpt_blog_entry() {

    $labels = array( 
        'name' => _x( 'Blog Entries', 'blog_entry' ),
        'singular_name' => _x( 'Blog Entry', 'blog_entry' ),
        'add_new' => _x( 'Add New', 'blog_entry' ),
        'add_new_item' => _x( 'Add New Blog Entry', 'blog_entry' ),
        'edit_item' => _x( 'Edit Blog Entry', 'blog_entry' ),
        'new_item' => _x( 'New Blog Entry', 'blog_entry' ),
        'view_item' => _x( 'View Blog Entry', 'blog_entry' ),
        'search_items' => _x( 'Search Blog Entries', 'blog_entry' ),
        'not_found' => _x( 'No blog entries found', 'blog_entry' ),
        'not_found_in_trash' => _x( 'No blog entries found in Trash', 'blog_entry' ),
        'parent_item_colon' => _x( 'Parent Blog Entry:', 'blog_entry' ),
        'menu_name' => _x( 'Blog Entries', 'blog_entry' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'An individual blog entry',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'comments' ),
        'taxonomies' => array( 'txblogentry' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'blog_entry', $args );
}

// Register Custom Taxonomy
function custom_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Blogs', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Blog', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Blog Category', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest' => true,
    );
    register_taxonomy( 'taxonomytxblogs', array( 'blog' ), $args );

    $labels = array(
        'name'                       => _x( 'Blog Tags', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Blog Tag', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Blog Tag', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest' => true,
    );
    register_taxonomy( 'blogtag', array( 'blog' ), $args );


}
add_action( 'init', 'custom_taxonomy', 0 );

