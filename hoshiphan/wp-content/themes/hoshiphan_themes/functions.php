<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu Chính'),
			'menu-2' => __('Danh Mục Footer'),
			'menu-3' => __('Menu Category'),
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}



//  logo

// function m_logo_web($wp_customize)
// {
// 	$wp_customize->add_section(
// 		'logo',
// 		array(
// 			'title' => 'Logo',
// 			'description' => 'logo',
// 		)
// 	);

// 	$wp_customize->add_setting('Logo', array('default' => ''));
// 	$wp_customize->add_control(
// 		new WP_Customize_Image_Control($wp_customize, 'Logo', array(
// 			'label' => 'Logo',
// 			'section' => 'logo',
// 			'settings' => 'Logo'
// 		))
// 	);
// }
// add_action('customize_register', 'm_logo_web');



// thanh tìm kiếm

function search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm kiếm..."/>

    <button type="submit" class="close-search"><i class="fas fa-search"></i></button>
    </form>';
 
    return $form;
	}
	add_shortcode( 'wp_search_form', 'search_form' );



