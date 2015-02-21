<?php
/**
 * Checkout shipping information form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div data-hash="checkout-pickup">
	<div class="container">
		<section id="pickup-block" class="row">
			<div id="checkout-pickup" class="woocommerce-pickup-fields col-sm-12">
				<?php if ( WC()->cart->needs_shipping_address() === true ) : ?>

					<?php
						if ( empty( $_POST ) ) {

							$ship_to_different_address = get_option( 'woocommerce_ship_to_billing' ) === 'no' ? 1 : 0;
							$ship_to_different_address = apply_filters( 'woocommerce_ship_to_different_address_checked', $ship_to_different_address );

						} else {

							$ship_to_different_address = $checkout->get_value( 'ship_to_different_address' );

						}
					?>
				<div class="row">
					<h1 class="col-xs-12"><?php _e( 'Pickup adresse', 'woocommerce' ); ?></h1>
					<p class="col-xs-12"><?php _e( 'Lorem ipsum dolor sit amet.', 'woocommerce' ); ?></p>
				</div>
				<div class="row">
					<div class="col-sm-12 shipping_select">
						<div class="row" data-toggle="buttons">
							<div class="col-sm-6">
								<button id="pickup-from-same-address-button" class="btn btn-order btn-block btn-checkout"><i class="fa fa-home fa-2x hidden-xs"></i><i class="fa fa-home fa-3x visible-xs"></i> FROM FACTURE ADDRESS</button>
							</div>
							<div class="col-sm-6 ship-to-different-address">
								<button id="pickup-from-different-address-button" class="btn btn-order btn-block"><i class="fa fa-crosshairs fa-2x hidden-xs"></i><i class="fa fa-crosshairs fa-3x visible-xs"></i> FROM OTHER ADDRESS</button>
							</div>
						</div>
					</div>
					<h3 id="ship-to-different-address" class="hidden">
						<label for="ship-to-different-address-checkbox" class="checkbox"><?php _e( 'Ship to a different address?', 'woocommerce' ); ?></label>
						<input id="ship-to-different-address-checkbox" class="input-checkbox" <?php checked( $ship_to_different_address, 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" />
					</h3>
					<div class="col-sm-12 shipping_address">
						<?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>
						<?php 
						// order the keys for your custom ordering or delete the ones you don't need
						$myshippingfields=array(
						    "shipping_first_name",
							"shipping_company",
						    "shipping_address_1",
						    "shipping_address_2"
						);
						foreach ($myshippingfields as $key) : ?>
							<?php woocommerce_form_field( $key, $checkout->checkout_fields['shipping'][$key], $checkout->get_value( $key ) ); ?>
						<?php endforeach; ?>

						<div class="col-xs-12">
							<button type="button" id="pickup-next-btn" class="btn btn-order btn-block btn-checkout"  disabled="disabled">NEXT</button>
						</div>
						<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>
					</div>
					<div class="col-sm-12">
						<div class="col-xs-12">
							<?php if ( ! is_user_logged_in() ): ?><div id="pickup-back-btn" class="btn-link btn-back pull-left">&lt; BACK</div><?php endif; ?>
							<div id="pickup-from-same-address-link" class="btn-link hide pull-right"> &gt; PICKUP FROM YOUR OFFICE</div>
						</div>
					</div>
				<?php endif; ?>
				</div>

			</div>

		</section>
	</div>
</div>