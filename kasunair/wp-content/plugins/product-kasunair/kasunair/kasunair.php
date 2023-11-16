<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_kasunair');

// The custom function to register a movie post type
function custom_kasunair()
{

    register_post_type('product-kasunair', [
        'label' => __('kasunair', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'product-kasunair'],
        'taxonomies' => ['category-product'],
        'labels' => [
            'singular_name' => __('product-kasunair', 'txtdomain'),
            'add_new_item' => __('Add new product kasunair', 'txtdomain'),
            'new_item' => __('New product-kasunair', 'txtdomain'),
            'view_item' => __('View product-kasunair', 'txtdomain'),
            'not_found' => __('No product-kasunair found', 'txtdomain'),
            'not_found_in_trash' => __('No product-kasunair found in trash', 'txtdomain'),
            'all_items' => __('All Product kasunair', 'txtdomain'),
            'insert_into_item' => __('Insert into product-kasunair', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-product', ['product-kasunair'], [
        'label' => __('Category Product', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-product'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-product', 'txtdomain'),
            'all_items' => __('All category-product', 'txtdomain'),
            'edit_item' => __('Edit category-product', 'txtdomain'),
            'view_item' => __('View category-product', 'txtdomain'),
            'update_item' => __('Update category-product', 'txtdomain'),
            'add_new_item' => __('Add New category product', 'txtdomain'),
            'new_item_name' => __('New category-product Name', 'txtdomain'),
            'search_items' => __('Search category-product', 'txtdomain'),
            'parent_item' => __('Parent category product', 'txtdomain'),
            'parent_item_colon' => __('Parent category-product:', 'txtdomain'),
            'not_found' => __('No category-product found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-product', 'product-kasunair');
}


function product_cate()
{
    $cats = get_the_terms(get_the_ID(), 'category-product');
    foreach ($cats as $cat) :
        if ($cat->slug != 'category-product') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}