<?php

/**
 *
 *  Custom Post Type registration
 *
 */

function register_my_posttypes()
{

  /*
   *
   * example cpt
   * replace example with your own cpt labels
	 * replace digi with your own text domain
   */

  $labels = array(
      'name'               => _x( 'Examples', 'post type general name', 'digi' ),
      'singular_name'      => _x( 'Example', 'post type singular name', 'digi' ),
      'menu_name'          => _x( 'Examples', 'admin menu', 'digi' ),
      'name_admin_bar'     => _x( 'Examples', 'add new on admin bar', 'mdigi' ),
      'add_new'            => _x( 'Add new', 'slider', 'digi' ),
      'add_new_item'       => __( 'Add new item', 'digi' ),
      'new_item'           => __( 'New item', 'digi' ),
      'edit_item'          => __( 'Edit item', 'digi' ),
      'view_item'          => __( 'View item', 'digi' ),
      'all_items'          => __( 'All items', 'digi' ),
      'search_items'       => __( 'Search items', 'digi' ),
      'parent_item_colon'  => __( 'Parent item:', 'digi' ),
      'not_found'          => __( 'Not found', 'digi' ),
      'not_found_in_trash' => __( 'Not found in trash', 'digi' )
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'example', 'with_front' => true ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'taxonomies' => array('post_tag'),
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' )
  );

  register_post_type( 'example', $args );
	
	
	/*
   *
   * example custom taxonomy
   * replace example with your own cpt labels
	 * replace digi with your own text domain
   */

  $labels = array(
    'name'              => _x( 'Example taxonomies', 'taxonomy general name', 'digi' ),
    'singular_name'     => _x( 'Example taxonomy', 'taxonomy singular name', 'digi' ),
    'search_items'      => __( 'Search items', 'digi' ),
    'all_items'         => __( 'All items', 'digi' ),
    'parent_item'       => __( 'Parent item', 'digi' ),
    'parent_item_colon' => __( 'Parent item:', 'digi' ),
    'edit_item'         => __( 'Edit item', 'digi' ),
    'update_item'       => __( 'Update item', 'digi' ),
    'add_new_item'      => __( 'Add new item', 'digi' ),
    'new_item_name'     => __( 'New item name', 'digi' ),
    'menu_name'         => __( 'Example taxonomies', 'digi' ),
  );


  $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'example-taxonomy' ),
	);

	register_taxonomy( 'example-taxonomies', array( 'example' ), $args );

}

add_action( 'init', 'register_my_posttypes' );