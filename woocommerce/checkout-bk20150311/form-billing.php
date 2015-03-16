<?php
/**
 * Checkout billing information form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.2
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div data-hash="checkout-billing" <?php if ( is_user_logged_in() ): ?>class="hidden"<?php endif; ?> >
	<div class="container">
		<section id="billing-block" class="row">
			<div id="customer_details_billing" class="col-xs-12">
				<div class="woocommerce-billing-fields row">

					<?php if ( WC()->cart->ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

						<h1 class="col-sm-12"><?php _e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h1>

					<?php else : ?>

						<h1 class="col-sm-12"><?php _e( 'Billing Details', 'woocommerce' ); ?></h1>

					<?php endif; ?>
					<p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
					<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>


					<?php

					// order the keys for your custom ordering or delete the ones you don't need
					$mybillingfields=array(
					    "billing_first_name",
					    "billing_last_name",
					    "billing_address_1",
					    "billing_address_2",
						"billing_company",
					    "billing_phone",
					    // "billing_postcode",
					    "billing_email"
					);

					foreach ($mybillingfields as $key) : ?>
					<?php woocommerce_form_field( $key, $checkout->checkout_fields['billing'][$key], $checkout->get_value( $key ) ); ?>
					<?php endforeach; ?>


					<?php do_action('woocommerce_after_checkout_billing_form', $checkout ); ?>

						<input class="input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true) ?> type="checkbox" name="createaccount" value="1" checked style="display:none" />

					<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>


					<?php foreach ( $checkout->checkout_fields['account'] as $key => $field ) : ?>

						<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

					<?php endforeach; ?>


					<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>

				</div>
			</div>
			<div class="col-xs-12">
				<button type="button" id="billing-next-btn" class="btn btn-order btn-block btn-checkout" disabled="disabled">NEXT</button>
			</div>

		</section>
	</div>
</div>

