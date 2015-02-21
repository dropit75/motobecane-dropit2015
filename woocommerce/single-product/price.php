<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

					<div class="col-sm-6">

						<div class="price-s" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
							<p class="price">
							<?php 




								function get_discount_price() {
									$user_id = get_current_user_id();
									$user_groups = WooGroupPricing::get_user_groups ( $user_id );
									$discount = 0;
									if ( sizeof( $user_groups ) > 0 ) {
										$first_group = $user_groups[0];
										if ( get_option( "wgp-" . $first_group->group_id, "-1" ) !== "-1" ) {
											$discount = get_option( "wgp-" . $first_group->group_id );
										}
									}
									if ( $discount !== 0 ) {
										return $discount;
									}
								}



								 $rPrice = $product->get_regular_price();
								 intval($dPrice);
								 $dRate = get_discount_price() * 100;
								 intval($dRate);

							 ?>
							<?php echo $product->get_price_html(); ?><span class="tva"> TVA</span></p>
							<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
							<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
							<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
						</div>
						<div class="option-s">
							<ul>
								<?php if ( is_user_logged_in() && $dRate > 0 ): ?>
									<li>Discount <span><?php echo $dRate ?>%</span> applied from reguler price <span><?php echo $rPrice ?> euro.</span> </li>
								<?php endif; ?>
								<li>All price displayed are including tax</li>
								<li>Depending on the conditions, it may add option fee</li>
							</ul>
						</div>

					</div>
					
				</div>
<!-- 
				<div class="col-sm-6 col-sm-offset-3">
					<button id="product-next" class="btn btn-block btn-dropit">NEXT <i class="fa fa-angle-right"></i></button>
				</div> -->

			</section>
		</div>
	</div>
