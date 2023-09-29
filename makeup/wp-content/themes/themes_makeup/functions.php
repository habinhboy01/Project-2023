<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Main Menu'),
			'menu-2' => __('Menu Dịch Vụ'),
			'menu-3' => __('Menu Giới Thiệu'),
			'menu-4' => __('Menu Đào tạo vào tuyển dụng'),
			'menu-5' => __('Menu Tin tức và sự kiện'),
		)
	);
}
add_action('init', 'm_register_menu');


// add theme option menu bar admin 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}



//  logo

function m_logo_web($wp_customize)
{
	$wp_customize->add_section(
		'logo',
		array(
			'title' => 'Logo',
			'description' => 'logo',
		)
	);

	$wp_customize->add_setting('Logo', array('default' => ''));
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'Logo', array(
			'label' => 'Logo',
			'section' => 'logo',
			'settings' => 'Logo'
		))
	);
}
add_action('customize_register', 'm_logo_web');


// thanh tìm kiếm

function search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <button type="submit" class="csw-search-submit">
       	<img src="http://demo.choulemakeup.vn/wp-content/themes/themes_makeup/images/search.png">
    </button>

    <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm kiếm"/>
    </form>';
 
    return $form;
	}
	add_shortcode( 'wp_search_form', 'search_form' );



// thanh tiem kiếm công việc

add_shortcode( 'csw_search_form', 'csw_search_form_fc' );
function csw_search_form_fc(){
    ?>
    <form role="search" method="get" class="form-career" action="<?php echo get_home_url() ?>">

    <input type="hidden" class="input-career" placeholder="Từ khoá" value="" name="s">

	<!-- nơi làm việc -->

	<select class="input-career2" name="location">
		<option value="">Chọn địa điểm</option>

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

	<select class="input-career2" name="career">
		<option value="">Chọn ngành nghề</option>

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

    <button type="submit" class="csw-search-submit">
        <i class="fas fa-search"></i>
    </button><br>
    </form>
    <?php
}



// filter post type service

function hk_posts_taxonomy_filter() {
	global $typenow;
	if ($typenow == 'service') { // post type slug
		$taxonomy_names = array('category-service'); // taxonomy slug
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



/*insert to functions.php*/
function devvn_comment($comment, $args, $depth)    {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class();?> id="li-comment-<?=get_comment_ID();?>">    
        <div id="comment-<?=get_comment_ID();?>" class="clearfix">
             <div class="comment-author vcard">
                <?php echo get_avatar($comment, $size='70', ''); ?>  
             </div><!-- end comment autho vcard-->
        
	         <div class="commentBody">
	        	 <div class="comment-meta commentmetadata">
	              <?php printf(__('<p class="fn">%s</p>'), get_comment_author_link()); ?>	              
	             </div><!--end .comment-meta-->
	            <?php if($comment->comment_approved == '0') : ?>
	                <em><?php echo 'Your coment is waiting for moderation.';?></em>
	                <?php endif; ?>
				<div class="noidungcomment">
	            	<?php comment_text(); ?>
	            </div>
	            <div class="tools_comment">	                
		            <?php comment_reply_link(array_merge($args,array('respond_id' => 'formcmmaxweb','depth' => $depth, 'max_depth'=> $args['max_depth'])));?>		            
              		<?php edit_comment_link(__('Sửa'),' ',''); ?>
              		<?php printf(__('<a href="#comment-%d" class="ngaythang">%s</a>'),get_comment_ID(),get_comment_date('d/m/Y'));?>
	            </div>
	            	
	        </div><!--end #commentBody-->
        </div><!--end #comment-author-vcard-->
	</li>
<?php }

