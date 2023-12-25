<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<h1 class="title-product-woo"><?php the_title() ;?></h1>

	<div class="row bg-product-woo2">
		<div class="col-lg-6 col-12">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>


		<div class="col-lg-6 col-12">
			<div class="description-product-woo">
				<div class="short-description-product-woo">
					<?php
						$short_description = $product->get_short_description();
						$short_description = nl2br(preg_replace("/\n+/", "\n", $short_description));
						echo $short_description;
						?>
				</div>
				<?php
				
// 				 /**
// 					 * Hook: woocommerce_single_product_summary.
// 					 *
// 					 * @hooked woocommerce_template_single_title - 5
// 					 * @hooked woocommerce_template_single_price - 10
// 					 */
// 					do_action('woocommerce_single_product_summary');
// 					
// 					global $product;
					if ($product->is_type('variable')) {
					
						woocommerce_variable_add_to_cart();
					}
				else { ?>
					<form class="cart" method="post" enctype='multipart/form-data'>
						<?php
						do_action('woocommerce_before_add_to_cart_button');
						woocommerce_quantity_input(); 
						?>
						<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button> 
						<?php
						do_action('woocommerce_after_add_to_cart_button');
						?>
					</form>
				<?php }

				?> 
				
			</div>
		</div>
		<div class="col-12 long-des">
			<div>
				Thông tin sản phẩm
			</div>
			<div class="long-description-product-woo">
				<?php echo nl2br($product->get_description()) ?>
			</div>
		</div>
		
	</div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
