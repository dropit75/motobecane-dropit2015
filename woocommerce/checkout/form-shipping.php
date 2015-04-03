
<?php
/**
 * Checkout shipping information form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<?php if ( WC()->cart->needs_shipping_address() === true ) : ?>
<div data-hash="checkout-pickup">
	<div class="container">
		<section id="pickup-block" class="row">
			<div class="woocommerce-pickup-fields col-sm-12">
				<?php
					if ( empty( $_POST ) ) {
						$ship_to_different_address = get_option( 'woocommerce_ship_to_destination' ) === 'shipping' ? 1 : 0;
						$ship_to_different_address = apply_filters( 'woocommerce_ship_to_different_address_checked', $ship_to_different_address );
					} else {
						$ship_to_different_address = $checkout->get_value( 'ship_to_different_address' );
					}
				?>
				<div class="pickup_address">
					
					<h1>Pickup Details</h1>
					<p>Lorem ipsum dolor sit amet, consectetur.</p>

					<p class="col-sm-6 form-row form-row-first" id="shipping_pickup_first_name_field">
						<label for="shipping_pickup_first_name" class="">Name</label>
						<input type="text" class="input-text " name="shipping_pickup_first_name" id="shipping_pickup_first_name" placeholder="Name" value="<?php echo $checkout->get_value('shipping_pickup_first_name'); ?>">
					</p>
					<p class="col-sm-6 form-row form-row-first" id="shipping_pickup_company_field">
						<label for="shipping_pickup_company" class="">Company Name</label>
						<input type="text" class="input-text " name="shipping_pickup_company" id="shipping_pickup_company" placeholder="Company Name" value="<?php echo $checkout->get_value('shipping_pickup_company'); ?>">
					</p>
					<p class="col-sm-6 form-row form-row-first" id="shipping_pickup_address_1_field">
						<label for="shipping_pickup_address_1" class="">Address1</label>
						<input type="text" class="input-text " name="shipping_pickup_address_1" id="shipping_pickup_address_1" placeholder="Street Address" value="<?php echo $checkout->get_value('shipping_pickup_address_1'); ?>">
					</p>
					<p class="col-sm-6 form-row form-row-first" id="shipping_pickup_address_2_field">
						<label for="shipping_pickup_address_2" class="">Address2</label>
						<input type="text" class="input-text " name="shipping_pickup_address_2" id="shipping_pickup_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="<?php echo $checkout->get_value('shipping_pickup_address_2'); ?>">
					</p>
					<p class="col-sm-6 form-row form-row-first" id="shipping_pickup_postcode_field">
						<label for="shipping_pickup_postcode" class="">Postcode / Zip</label>
						<input type="text" class="input-text " name="shipping_pickup_postcode" id="shipping_pickup_postcode" placeholder="Postcode / Zip" value="<?php echo $checkout->get_value('shipping_pickup_postcode'); ?>">
					</p>
					<p class="col-sm-6 form-row form-row-first" id="shipping_pickup_phone_field">
						<label for="shipping_pickup_phone" class="">Phone Number</label>
						<input type="text" class="input-text " name="shipping_pickup_phone" id="shipping_pickup_phone" placeholder="Phone Number" value="<?php echo $checkout->get_value('shipping_pickup_phone'); ?>">
					</p>

				</div>
			</div>

			<h3 id="ship-to-different-address" class="hidden">
				<label for="ship-to-different-address-checkbox" class="checkbox"><?php _e( 'Ship to a different address?', 'woocommerce' ); ?></label>
				<input id="ship-to-different-address-checkbox" class="input-checkbox" <?php checked( $ship_to_different_address, 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" />
			</h3>

		</section>
	</div>
</div>


<div data-hash="checkout-shipping">
	<div class="container">
		<section id="shipping-block" class="row">

			<div class="woocommerce-shipping-fields col-sm-12">


				<div class="shipping_address">
			
					<h1>Shipping Details</h1>
					<p>Lorem ipsum dolor sit amet, consectetur.</p>
					
					<?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>

					<p class="col-sm-6 form-row form-row-first validate-required validate-required" id="shipping_first_name_field">
						<label for="shipping_first_name" class=""> Name <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="Name" value="<?php echo $checkout->get_value('shipping_first_name'); ?>">
					</p>
					<p class="col-sm-6 form-row form-row-first" id="shipping_company_field">
						<label for="shipping_company" class="">Company Name</label>
						<input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="Company Name" value="<?php echo $checkout->get_value('shipping_company'); ?>">
					</p>
					<p class="col-sm-6 form-row address-field form-row-first validate-required" id="shipping_address_1_field">
						<label for="shipping_address_1" class="">Address1 <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Street address" value="<?php echo $checkout->get_value('shipping_address_1'); ?>">
					</p>
					<p class="col-sm-6 form-row address-field form-row-first" id="shipping_address_2_field">
						<label for="shipping_address_2" class="">Address2</label>
						<input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="<?php echo $checkout->get_value('shipping_address_2'); ?>">
					</p>
					<p class="col-sm-6 form-row address-field form-row-first validate-required validate-postcode woocommerce-validated" id="shipping_postcode_field">
						<label for="shipping_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="Postcode / Zip" value="<?php echo $checkout->get_value('shipping_postcode'); ?>" autocomplete="off">
					</p>
					<p class="col-sm-6 form-row form-row-first" id="shipping_phone_field">
						<label for="shipping_phone" class="">Phone Number</label>
						<input type="text" class="input-text " name="shipping_phone" id="shipping_phone" placeholder="Phone Number" value="<?php echo $checkout->get_value('shipping_phone'); ?>">
					</p>
					<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>
				</div>
			</div>
		</section>
	</div>
</div>
<?php endif; ?>

<!-- <div data-hash="checkout-xxx">
	<div class="container">
		<?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>

			<?php if ( apply_filters( 'woocommerce_enable_order_notes_field', get_option( 'woocommerce_enable_order_comments', 'yes' ) === 'yes' ) ) : ?>

				<?php if ( ! WC()->cart->needs_shipping() || WC()->cart->ship_to_billing_address_only() ) : ?>

					<h3><?php _e( 'Additional Information', 'woocommerce' ); ?></h3>

				<?php endif; ?>

				<?php foreach ( $checkout->checkout_fields['order'] as $key => $field ) : ?>

					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

				<?php endforeach; ?>

			<?php endif; ?>

			<?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
	</div>
</div>

 -->