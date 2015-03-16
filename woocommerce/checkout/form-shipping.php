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
<div class="woocommerce-shipping-fields">
	<?php if ( WC()->cart->needs_shipping_address() === true ) : ?>

		<?php
			if ( empty( $_POST ) ) {

				$ship_to_different_address = get_option( 'woocommerce_ship_to_destination' ) === 'shipping' ? 1 : 0;
				$ship_to_different_address = apply_filters( 'woocommerce_ship_to_different_address_checked', $ship_to_different_address );

			} else {

				$ship_to_different_address = $checkout->get_value( 'ship_to_different_address' );

			}
		?>

		<h3 id="ship-to-different-address">
			<label for="ship-to-different-address-checkbox" class="checkbox"><?php _e( 'Ship to a different address?', 'woocommerce' ); ?></label>
			<input id="ship-to-different-address-checkbox" class="input-checkbox" <?php checked( $ship_to_different_address, 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" />
		</h3>

		<div class="shipping_address">

			<?php do_action( 'woocommerce_before_checkout_shipping_form', $checkout ); ?>

			<?php foreach ( $checkout->checkout_fields['shipping'] as $key => $field ) : ?>

				<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

			<?php endforeach; ?>

			<?php do_action( 'woocommerce_after_checkout_shipping_form', $checkout ); ?>

		</div>

	<?php endif; ?>

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








<!--

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
<div class="woocommerce-shipping-fields">
	<?php if ( WC()->cart->needs_shipping_address() === true ) : ?>

		<?php
			if ( empty( $_POST ) ) {

				$ship_to_different_address = get_option( 'woocommerce_ship_to_destination' ) === 'shipping' ? 1 : 0;
				$ship_to_different_address = apply_filters( 'woocommerce_ship_to_different_address_checked', $ship_to_different_address );

			} else {

				$ship_to_different_address = $checkout->get_value( 'ship_to_different_address' );

			}
		?>
 
		<h3 id="ship-to-different-address" class="hidden">
			<label for="ship-to-different-address-checkbox" class="checkbox"><?php _e( 'Ship to a different address?', 'woocommerce' ); ?></label>
			<input id="ship-to-different-address-checkbox" class="input-checkbox" <?php checked( $ship_to_different_address, 1 ); ?> type="checkbox" name="ship_to_different_address" value="1" />
		</h3>


<div class="pickup_address">
	
	<h3>Pickup Details</h3>

	<p class="form-row form-row-first" id="shipping_pickup_first_name_field">
		<label for="shipping_pickup_first_name" class="">First Name</label>
		<input type="text" class="input-text " name="shipping_pickup_first_name" id="shipping_pickup_first_name" placeholder="First Name" value="<?php echo $checkout->get_value('shipping_pickup_first_name'); ?>">
	</p>
	<p class="form-row form-row-first" id="shipping_pickup_company_field">
		<label for="shipping_pickup_company" class="">Company Name</label>
		<input type="text" class="input-text " name="shipping_pickup_company" id="shipping_pickup_company" placeholder="Company Name" value="<?php echo $checkout->get_value('shipping_pickup_company'); ?>">
	</p>
	<p class="form-row form-row-first" id="shipping_pickup_address_1_field">
		<label for="shipping_pickup_address_1" class="">Address1</label>
		<input type="text" class="input-text " name="shipping_pickup_address_1" id="shipping_pickup_address_1" placeholder="Street Address" value="<?php echo $checkout->get_value('shipping_pickup_address_1'); ?>">
	</p>
	<p class="form-row form-row-first" id="shipping_pickup_address_2_field">
		<label for="shipping_pickup_address_2" class="">Address2</label>
		<input type="text" class="input-text " name="shipping_pickup_address_2" id="shipping_pickup_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="<?php echo $checkout->get_value('shipping_pickup_address_2'); ?>">
	</p>
	<p class="form-row form-row-first" id="shipping_pickup_postcode_field">
		<label for="shipping_pickup_postcode" class="">Postcode / Zip</label>
		<input type="text" class="input-text " name="shipping_pickup_postcode" id="shipping_pickup_postcode" placeholder="Postcode / Zip" value="<?php echo $checkout->get_value('shipping_pickup_postcode'); ?>">
	</p>
	<p class="form-row form-row-first" id="shipping_pickup_phone_field">
		<label for="shipping_pickup_phone" class="">Phone Number</label>
		<input type="text" class="input-text " name="shipping_pickup_phone" id="shipping_pickup_phone" placeholder="Phone Number" value="<?php echo $checkout->get_value('shipping_pickup_phone'); ?>">
	</p>

</div>

<div class="shipping_address">
	
	<h3>Shipping Details</h3>

	<p class="form-row form-row-first validate-required validate-required" id="shipping_first_name_field">
		<label for="shipping_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
		<input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="First Name" value="<?php echo $checkout->get_value('shipping_first_name'); ?>">
	</p>
	<p class="form-row form-row-first" id="shipping_company_field">
		<label for="shipping_company" class="">Company Name</label>
		<input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="Company Name" value="<?php echo $checkout->get_value('shipping_company'); ?>">
	</p>
	<p class="form-row address-field form-row-first validate-required" id="shipping_address_1_field">
		<label for="shipping_address_1" class="">Address1 <abbr class="required" title="required">*</abbr></label>
		<input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Street address" value="<?php echo $checkout->get_value('shipping_address_1'); ?>">
	</p>
	<p class="form-row address-field form-row-first" id="shipping_address_2_field">
		<label for="shipping_address_2" class="">Address2</label>
		<input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="<?php echo $checkout->get_value('shipping_address_2'); ?>">
	</p>
	<p class="form-row address-field form-row-first validate-required validate-postcode woocommerce-validated" id="shipping_postcode_field">
		<label for="shipping_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label>
		<input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="Postcode / Zip" value="<?php echo $checkout->get_value('shipping_postcode'); ?>" autocomplete="off">
	</p>
	<p class="form-row form-row-first" id="shipping_phone_field">
		<label for="shipping_phone" class="">Phone Number</label>
		<input type="text" class="input-text " name="shipping_phone" id="shipping_phone" placeholder="Phone Number" value="<?php echo $checkout->get_value('shipping_phone'); ?>">
	</p>

</div>

	<?php endif; ?>


</div>
 -->