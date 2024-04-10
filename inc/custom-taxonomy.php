<?php
/**
 * GutenDev Custom Taxonomy Registration Party
 * REMBEMBER -> Uncomment / add this file to functions.php
 */


// register ###REPLACE_ME### custom taxonomy
 add_action( 'init', 'gdt_pillar_reg', 0 );

// create taxonomy, for the post type(s) you connect it to below
function gdt_pillar_reg() {
  // Add new taxonomy, make it hierarchical (like categories)
  $singular = 'Pillar';
  $plural = 'Pillars';
  $labels = array(
    'name'              => "$plural",
    'singular_name'     => "$singular",
    'search_items'      => "$plural",
    'all_items'         => "$plural",
    'parent_item'       => "Parent $singular",
    'parent_item_colon' => "Parent $singular",
    'edit_item'         => "Edit $singular",
    'update_item'       => "Update $singular",
    'add_new_item'      => "Add New $singular",
    'new_item_name'     => "New $singular Name",
    'menu_name'         => "$plural"
  );
  $args = array(
    'public'            => false,
    'show_in_rest'      => true,
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => false  /* true or use custom slug => array( 'slug' => 'custom-tag-slug', 'with_front' => false  ) */
  );
  register_taxonomy( 'taxonomyname_tax', array( 'project_type' ), $args );
}


// register ###REPLACE_ME### custom taxonomy
 add_action( 'init', 'gdt_membertype_reg', 0 );

// create taxonomy, for the post type(s) you connect it to below
function gdt_membertype_reg() {
  // Add new taxonomy, make it hierarchical (like categories)
  $singular = 'Member Type';
  $plural = 'Member Types';
  $labels = array(
    'name'              => "$plural",
    'singular_name'     => "$singular",
    'search_items'      => "$plural",
    'all_items'         => "$plural",
    'parent_item'       => "Parent $singular",
    'parent_item_colon' => "Parent $singular",
    'edit_item'         => "Edit $singular",
    'update_item'       => "Update $singular",
    'add_new_item'      => "Add New $singular",
    'new_item_name'     => "New $singular Name",
    'menu_name'         => "$plural"
  );
  $args = array(
    'public'            => false,
    'show_in_rest'      => true,
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => false  /* true or use custom slug => array( 'slug' => 'custom-tag-slug', 'with_front' => false  ) */
  );
  register_taxonomy( 'teamtype_tax', array( 'team_type' ), $args );
}



// register ###social type### custom taxonomy
add_action( 'init', 'gdt_regtype_reg', 0 );

// create taxonomy, for the post type(s) you connect it to below
function gdt_regtype_reg() {
  // Add new taxonomy, make it hierarchical (like categories)
  $singular = 'Registration Type';
  $plural = 'Registration Types';
  $labels = array(
    'name'              => "$plural",
    'singular_name'     => "$singular",
    'search_items'      => "$plural",
    'all_items'         => "$plural",
    'parent_item'       => "Parent $singular",
    'parent_item_colon' => "Parent $singular",
    'edit_item'         => "Edit $singular",
    'update_item'       => "Update $singular",
    'add_new_item'      => "Add New $singular",
    'new_item_name'     => "New $singular Name",
    'menu_name'         => "$plural"
  );
  $args = array(
    'public'            => false,
    'show_in_rest'      => true,
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => false  /* true or use custom slug => array( 'slug' => 'custom-tag-slug', 'with_front' => false  ) */
  );
  register_taxonomy( 'registration_tax', array( 'social_type' ), $args );
}




add_action( 'init', 'gdt_socialtag_reg', 0 );

// create taxonomy, for the post type(s) you connect it to below
function gdt_socialtag_reg() {
  // Add new taxonomy, make it hierarchical (like categories)
  $singular = 'Social Connection Tag';
  $plural = 'Social Connection Tags';
  $labels = array(
    'name'              => "$plural",
    'singular_name'     => "$singular",
    'search_items'      => "$plural",
    'all_items'         => "$plural",
    'parent_item'       => "Parent $singular",
    'parent_item_colon' => "Parent $singular",
    'edit_item'         => "Edit $singular",
    'update_item'       => "Update $singular",
    'add_new_item'      => "Add New $singular",
    'new_item_name'     => "New $singular Name",
    'menu_name'         => "$plural"
  );
  $args = array(
    'public'            => false,
    'show_in_rest'      => true,
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => false  /* true or use custom slug => array( 'slug' => 'custom-tag-slug', 'with_front' => false  ) */
  );
  register_taxonomy( 'socialtag_tax', array( 'social_type' ), $args );
}


?>
