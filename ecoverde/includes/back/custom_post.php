 <?php
function custom_post() {
    $labels = array(
        'name'                => 'nekretnines',
        'singular_name'       => 'nekretnine',
        'menu_name'           => 'nekretnine',
        'parent_item_colon'   => 'Parent nekretnine:',
        'all_items'           => 'All nekretnines',
        'view_item'           => 'View nekretnine',
        'add_new_item'        => 'Add New nekretnine',
        'add_new'             => 'New nekretnine',
        'edit_item'           => 'Edit nekretnine',
        'update_item'         => 'Update nekretnine',
        'search_items'        => 'Search nekretnine',
        'not_found'           => 'No nekretnines found',
        'not_found_in_trash'  => 'No nekretnines found in Trash',
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'nekretnine custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
      
    );
      
    register_post_type('nekretnine', $args);
}