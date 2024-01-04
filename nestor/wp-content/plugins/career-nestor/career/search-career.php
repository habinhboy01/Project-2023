<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_recruitment');

// The custom function to register a movie post type
function custom_recruitment()
{

    register_post_type('recruitment', [
        'label' => __('Recruitment', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'recruitment'],
        'taxonomies' => ['location','career'],
        'labels' => [
            'singular_name' => __('Recruitment', 'txtdomain'),
            'add_new_item' => __('Add new recruitment', 'txtdomain'),
            'new_item' => __('New recruitment', 'txtdomain'),
            'view_item' => __('View recruitment', 'txtdomain'),
            'not_found' => __('No recruitment found', 'txtdomain'),
            'not_found_in_trash' => __('No recruitment found in trash', 'txtdomain'),
            'all_items' => __('All recruitment', 'txtdomain'),
            'insert_into_item' => __('Insert into recruitment', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('career', ['recruitment'], [
        'label' => __('Career', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'career'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Career', 'txtdomain'),
            'all_items' => __('All Career', 'txtdomain'),
            'edit_item' => __('Edit Career', 'txtdomain'),
            'view_item' => __('View Career', 'txtdomain'),
            'update_item' => __('Update Career', 'txtdomain'),
            'add_new_item' => __('Add New Career', 'txtdomain'),
            'new_item_name' => __('New Career Name', 'txtdomain'),
            'search_items' => __('Search Career', 'txtdomain'),
            'parent_item' => __('Parent Career', 'txtdomain'),
            'parent_item_colon' => __('Parent Career:', 'txtdomain'),
            'not_found' => __('No Career found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('career', 'recruitment');

    // -----------------------

    register_taxonomy('location', ['recruitment'], [
        'label' => __('Location', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'location'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Location', 'txtdomain'),
            'all_items' => __('All Location', 'txtdomain'),
            'edit_item' => __('Edit Location', 'txtdomain'),
            'view_item' => __('View Location', 'txtdomain'),
            'update_item' => __('Update Location', 'txtdomain'),
            'add_new_item' => __('Add New Location', 'txtdomain'),
            'new_item_name' => __('New Location Name', 'txtdomain'),
            'search_items' => __('Search Location', 'txtdomain'),
            'parent_item' => __('Parent Location', 'txtdomain'),
            'parent_item_colon' => __('Parent Location:', 'txtdomain'),
            'not_found' => __('No Location found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('location', 'recruitment');
}


function location_cate()
{
    $cats = get_the_terms(get_the_ID(), 'location');
    foreach ($cats as $cat) :
        if ($cat->slug != 'location') :
            // echo '<a href="' . get_term_link($cat->slug, 'location') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}


function career_cate()
{
    $cats = get_the_terms(get_the_ID(), 'career');
    foreach ($cats as $cat) :
        if ($cat->slug != 'career') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}