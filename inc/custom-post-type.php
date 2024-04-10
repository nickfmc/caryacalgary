<?php
/**
 * GutenDev Custom Post Type Registration Party
 * REMBEMBER -> Uncomment / add this file to functions.php
 */

// register ###REPLACE_ME### custom post type
add_action( 'init', 'gdt_program_reg' );

// create a custom post type and name it
function gdt_program_reg() {
  $singular = 'Program';
  $plural = 'Programs';
  $labels = array(
    'name'                 => "$plural",
    'singular_name'        => "$singular",
    'menu_name'            => "$plural",
    'name_admin_bar'       => "$singular",
    'add_new'              => 'Add New',
    'add_new_item'         => "Add New $singular",
    'new_item'             => "New $singular",
    'edit_item'            => "Edit $singular",
    'view_item'            => "View $singular",
    'all_items'            => "All $plural",
    'search_items'         => "Search $plural",
    'parent_item_colon'    => "Parent $plural:",
    'not_found'            => "No $plural Found",
    'not_found_in_trash'   => "No $plural Found in Trash",
  );
  $args = array(
    'labels'               => $labels,
    'public'               => true,
    'show_in_rest'         => true,
    'publicly_queryable'   => true,
    'exclude_from_search'  => true,
    'show_ui'              => true,
    'show_in_menu'         => true,
    'query_var'            => true,
    'menu_position'        => 21,
    'menu_icon'            => 'dashicons-welcome-learn-more',
    'rewrite'              => array( 'slug' => 'program', 'with_front' => false ),
    'capability_type'      => 'post',
    'has_archive'          => false, // true or use custom slug: 'custom_type_url/past' */
    'hierarchical'         => false,
    'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'excerpt' )
  );
  register_post_type( 'project_type', $args );
}


// register ###REPLACE_ME### custom post type
add_action( 'init', 'gdt_team_reg' );

// create a custom post type and name it
function gdt_team_reg() {
  $singular = 'Team Member';
  $plural = 'Team Members';
  $labels = array(
    'name'                 => "$plural",
    'singular_name'        => "$singular",
    'menu_name'            => "$plural",
    'name_admin_bar'       => "$singular",
    'add_new'              => 'Add New',
    'add_new_item'         => "Add New $singular",
    'new_item'             => "New $singular",
    'edit_item'            => "Edit $singular",
    'view_item'            => "View $singular",
    'all_items'            => "All $plural",
    'search_items'         => "Search $plural",
    'parent_item_colon'    => "Parent $plural:",
    'not_found'            => "No $plural Found",
    'not_found_in_trash'   => "No $plural Found in Trash",
  );
  $args = array(
    'labels'               => $labels,
    'public'               => true,
    'show_in_rest'         => true,
    'publicly_queryable'   => true,
    'exclude_from_search'  => true,
    'show_ui'              => true,
    'show_in_menu'         => true,
    'query_var'            => true,
    'menu_position'        => 21,
    'menu_icon'            => 'dashicons-book',
    'rewrite'              => false, // or: array( 'slug' => 'custom_type_url/list', 'with_front' => false ),
    'capability_type'      => 'post',
    'has_archive'          => false, // true or use custom slug: 'custom_type_url/past' */
    'hierarchical'         => false,
    'supports'             => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' )
  );
  register_post_type( 'team_type', $args );
}






// register ###REPLACE_ME### custom post type
add_action( 'init', 'gdt_social_reg' );

// create a custom post type and name it
function gdt_social_reg() {
  $singular = 'Social Connection';
  $plural = 'Social Connections';
  $labels = array(
    'name'                 => "$plural",
    'singular_name'        => "$singular",
    'menu_name'            => "$plural",
    'name_admin_bar'       => "$singular",
    'add_new'              => 'Add New',
    'add_new_item'         => "Add New $singular",
    'new_item'             => "New $singular",
    'edit_item'            => "Edit $singular",
    'view_item'            => "View $singular",
    'all_items'            => "All $plural",
    'search_items'         => "Search $plural",
    'parent_item_colon'    => "Parent $plural:",
    'not_found'            => "No $plural Found",
    'not_found_in_trash'   => "No $plural Found in Trash",
  );
  $args = array(
    'labels'               => $labels,
    'public'               => true,
    'show_in_rest'         => true,
    'publicly_queryable'   => true,
    'exclude_from_search'  => true,
    'show_ui'              => true,
    'show_in_menu'         => true,
    'query_var'            => true,
    'menu_position'        => 21,
    'menu_icon'            => 'dashicons-share',
    'rewrite'              => array( 'slug' => 'social-connections', 'with_front' => false ),
    'capability_type'      => 'post',
    'has_archive'          => false, // true or use custom slug: 'custom_type_url/past' */
    'hierarchical'         => false,
    'supports'             => array( 'title', 'editor',  'revisions' )
  );
  register_post_type( 'social_type', $args ); 
}


?>
