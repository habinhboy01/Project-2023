<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_service_makeup');

// The custom function to register a movie post type
function custom_service_makeup()
{

    register_post_type('service', [
        'label' => __('Service', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-screenoptions',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'category-service'],
        'taxonomies' => [],
        'labels' => [
            'singular_name' => __('service', 'txtdomain'),
            'add_new_item' => __('Add new service', 'txtdomain'),
            'new_item' => __('New service', 'txtdomain'),
            'view_item' => __('View service', 'txtdomain'),
            'not_found' => __('No service found', 'txtdomain'),
            'not_found_in_trash' => __('No service found in trash', 'txtdomain'),
            'all_items' => __('All service', 'txtdomain'),
            'insert_into_item' => __('Insert into service', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-service', ['service'], [
        'label' => __('Category service', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'Category-service'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Category service', 'txtdomain'),
            'all_items' => __('All Category service', 'txtdomain'),
            'edit_item' => __('Edit Category service', 'txtdomain'),
            'view_item' => __('View Category service', 'txtdomain'),
            'update_item' => __('Update Category service', 'txtdomain'),
            'add_new_item' => __('Add New Category service', 'txtdomain'),
            'new_item_name' => __('New Category service Name', 'txtdomain'),
            'search_items' => __('Search Category service', 'txtdomain'),
            'parent_item' => __('Parent Category service', 'txtdomain'),
            'parent_item_colon' => __('Parent Category service:', 'txtdomain'),
            'not_found' => __('No Category service found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-service', 'service');

}


function real_estate_cate()
{
    $cats = get_the_terms(get_the_ID(), 'service');
    foreach ($cats as $cat) :
        if ($cat->slug != 'service') :
            echo '<a href="' . get_term_link($cat->slug, 'service') . '">';
            echo $cat->name;
            echo '</a>';
        endif;
    endforeach;
}