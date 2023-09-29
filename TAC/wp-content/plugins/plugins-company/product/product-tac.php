<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_tac');

// The custom function to register a movie post type
function custom_tac()
{

    register_post_type('tac', [
        'label' => __('TAC', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-archive',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'tac'],
        'taxonomies' => ['product','procedure'],
        'labels' => [
            'singular_name' => __('TAC', 'txtdomain'),
            'add_new_item' => __('Add new tac', 'txtdomain'),
            'new_item' => __('New tac', 'txtdomain'),
            'view_item' => __('View tac', 'txtdomain'),
            'not_found' => __('No tac found', 'txtdomain'),
            'not_found_in_trash' => __('No tac found in trash', 'txtdomain'),
            'all_items' => __('All tac', 'txtdomain'),
            'insert_into_item' => __('Insert into tac', 'txtdomain')
        ],
    ]);

    // muc category product

    register_taxonomy('product', ['tac'], [
        'label' => __('Product', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'product'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Product', 'txtdomain'),
            'all_items' => __('All Product', 'txtdomain'),
            'edit_item' => __('Edit Product', 'txtdomain'),
            'view_item' => __('View Product', 'txtdomain'),
            'update_item' => __('Update Product', 'txtdomain'),
            'add_new_item' => __('Add New Product', 'txtdomain'),
            'new_item_name' => __('New Product Name', 'txtdomain'),
            'search_items' => __('Search Product', 'txtdomain'),
            'parent_item' => __('Parent Product', 'txtdomain'),
            'parent_item_colon' => __('Parent Product:', 'txtdomain'),
            'not_found' => __('No Product found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('product', 'tac');

    // muc category procedure

    register_taxonomy('procedure', ['tac'], [
        'label' => __('Procedure', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'product'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Procedure', 'txtdomain'),
            'all_items' => __('All Procedure', 'txtdomain'),
            'edit_item' => __('Edit Procedure', 'txtdomain'),
            'view_item' => __('View Procedure', 'txtdomain'),
            'update_item' => __('Update Procedure', 'txtdomain'),
            'add_new_item' => __('Add New Procedure', 'txtdomain'),
            'new_item_name' => __('New Procedure Name', 'txtdomain'),
            'search_items' => __('Search Procedure', 'txtdomain'),
            'parent_item' => __('Parent Procedure', 'txtdomain'),
            'parent_item_colon' => __('Parent Procedure:', 'txtdomain'),
            'not_found' => __('No Procedure found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('product', 'tac');

}


function product_cate()
{
    $cats = get_the_terms(get_the_ID(), 'product');
    foreach ($cats as $cat) :
        if ($cat->slug != 'product') :
            echo '<a href="' . get_term_link($cat->slug, 'product') . '">';
            echo $cat->name;
            echo '</a>';
        endif;
    endforeach;
}


function procedure_cate()
{
    $cats = get_the_terms(get_the_ID(), 'procedure');
    foreach ($cats as $cat) :
        if ($cat->slug != 'procedure') :
            echo '<a href="' . get_term_link($cat->slug, 'procedure') . '">';
            echo $cat->name;
            echo '</a>';
        endif;
    endforeach;
}