<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

// support woocommerce

function my_custom_wc_theme_support()
{

    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-lightbox');

    add_theme_support('wc-product-gallery-slider');
    // add_theme_support('wc-product-gallery-zoom');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');


function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			'menu-2' => __('Menu Footer'),
			// 'menu-3' => __('Menu Footer 2'),
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}




// thanh tìm kiếm

function search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm kiếm..."/>

    <button type="submit"><i class="far fa-search"></i></button>
    </form>';
 
    return $form;
	}
	add_shortcode( 'wp_search_form', 'search_form' );


