<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

// support woocommerce

// function my_custom_wc_theme_support()
// {

//     add_theme_support('woocommerce');

//     add_theme_support('wc-product-gallery-lightbox');

//     add_theme_support('wc-product-gallery-slider');
//     // add_theme_support('wc-product-gallery-zoom');
// }
// add_action('after_setup_theme', 'my_custom_wc_theme_support');


function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			'menu-2' => __('Menu Footer'),
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


// thanh tiem kiếm công việc

add_shortcode( 'csw_search_form', 'csw_search_form_fc' );
function csw_search_form_fc(){
    ?>
    <form method="get" class="form-career" action="<?php echo get_home_url() ?>">

    	<input type="hidden" class="input-career" placeholder="Từ khoá" value="" name="s">

   		<!-- nơi làm việc -->

	    <p>Tỉnh / Thành Phố:</p>

		<select class="input-career2" name="location">
			<option value="">Chọn Địa Điểm</option>

			<?php
			   $args = array(			   		
				    'type' => 'recruitment',
				    'taxonomy' => 'location',
				    'parent' => 0,
				    'hide_empty' => false,
			    );

			   $cates = get_categories($args);

			   foreach($cates as $cate) {
			?>
			    <option value="<?php echo $cate->slug; ?>">
			        <?php echo $cate->name; ?>
			     </option>
			<?php
			   }
			?>
		</select>


	    <!-- nghề nghiệp -->

	    <p>Ngành Nghề:</p>

		<select class="input-career2" name="career">
			<option value="">Chọn Ngành Nghề</option>

			<?php
			   $args = array(			   		
				    'type' => 'recruitment',
				    'taxonomy' => 'career',
				    'parent' => 0,
				    'hide_empty' => false,
			    );

			   $cates = get_categories($args);

			   foreach($cates as $cate) {
			?>
			    <option value="<?php echo $cate->slug; ?>">
			        <?php echo $cate->name; ?>
			     </option>
			<?php
			   }
			?>
		</select>

		<div class="csw-search-submit">
		    <button type="submit">
		        Tìm Kiếm
		    </button>
		</div>
    </form>
    <?php
}



// filter post type Datatyk

function hk_posts_taxonomy_filter() {
	global $typenow;
	if ($typenow == 'recruitment') { // post type slug
		$taxonomy_names = array('location', 'career'); // taxonomy slug
		foreach ($taxonomy_names as $single_taxonomy) {
			$current_taxonomy = isset( $_GET[$single_taxonomy] ) ? $_GET[$single_taxonomy] : '';
			$taxonomy_object = get_taxonomy( $single_taxonomy );
			$taxonomy_name = strtolower( $taxonomy_object->labels->name );
			$taxonomy_terms = get_terms( $single_taxonomy );
			if (count($taxonomy_terms) > 0) {
				echo "<select name='$single_taxonomy' id='$single_taxonomy' class='postform'>";
				echo "<option value=''>All $taxonomy_name</option>";
				foreach ($taxonomy_terms as $single_term) {
					echo '<option value='. $single_term->slug, $current_taxonomy == $single_term->slug ? ' selected="selected"' : '','>' . $single_term->name .' (' . $single_term->count .')</option>'; 
				}
				echo "</select>";
			}
		}
	}
}
add_action( 'restrict_manage_posts', 'hk_posts_taxonomy_filter' );