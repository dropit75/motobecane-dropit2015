<?php
/**
 * Checkout billing information form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */
?>

<!-- <div class="woocommerce-billing-fields">
	<h3>Billing Details</h3>
	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>
		<p class="form-row form-row-first validate-required validate-required" id="billing_first_name_field">
			<label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
			<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="<?php echo $checkout->get_value('billing_first_name'); ?>">
		</p>
		<p class="form-row form-row-first validate-required validate-required" id="billing_last_name_field">
			<label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label>
			<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="<?php echo $checkout->get_value('billing_last_name'); ?>">
		</p>
		<p class="form-row form-row-first" id="billing_company_field">
			<label for="billing_company" class="">Company Name</label>
			<input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="<?php echo $checkout->get_value('billing_company'); ?>">
		</p>
		<p class="form-row form-row-first" id="billing_phone_field">
			<label for="billing_phone" class="">Phone</label>
			<input type="text" class="input-text " name="billing_phone" id="billing_phone" placeholder="Phone" value="<?php echo $checkout->get_value('billing_phone'); ?>">
		</p>
		<p class="form-row address-field form-row-first validate-required" id="billing_address_1_field">
			<label for="billing_address_1" class="">Address1 <abbr class="required" title="required">*</abbr></label>
			<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="<?php echo $checkout->get_value('billing_address_1'); ?>">
		</p>
		<p class="form-row address-field form-row-first" id="billing_address_2_field">
			<label for="billing_address_2" class="">Address2</label>
			<input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="<?php echo $checkout->get_value('billing_address_2'); ?>">
		</p>
		<p class="form-row address-field form-row-first validate-required validate-postcode" id="billing_postcode_field">
			<label for="billing_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label>
			<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip" value="<?php echo $checkout->get_value('billing_postcode'); ?>">
		</p>
		<p class="form-row form-row-first validate-required validate-required validate-email" id="billing_email_field">
			<label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label>
			<input type="text" class="input-text " name="billing_email" id="billing_email" placeholder="Email Address" value="<?php echo $checkout->get_value('billing_email'); ?>">
		</p>
	
	<?php do_action('woocommerce_after_checkout_billing_form', $checkout ); ?>
	<input class="input-checkbox hidden" id="createaccount" checked="checked" type="checkbox" name="createaccount" value="1" />
	<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>
		<p class="form-row" id="account_password_field"><label for="account_password" class="">Créez un mot de passe *</label><input type="text" class="input-text" name="account_password" id="account_password" placeholder="Créez un mot de passe *" value=""></p>
	<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
</div>
 -->
<div class="woocommerce-billing-fields">
	<?php if ( WC()->cart->ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

		<h3><?php _e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php else : ?>

		<h3><?php _e( 'Billing Details', 'woocommerce' ); ?></h3>

	<?php endif; ?>

<!-- 	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>
 -->
	<?php foreach ( $checkout->checkout_fields['billing'] as $key => $field ) : ?>

		<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

	<?php endforeach; ?>

	<?php do_action('woocommerce_after_checkout_billing_form', $checkout ); ?>

	<?php if ( ! is_user_logged_in() && $checkout->enable_signup ) : ?>

		<?php if ( $checkout->enable_guest_checkout ) : ?>

<!-- 			<p class="form-row form-row-wide create-account">
				<input class="input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true) ?> type="checkbox" name="createaccount" value="1" /> <label for="createaccount" class="checkbox"><?php _e( 'Create an account?', 'woocommerce' ); ?></label>
			</p> -->
			<p class="form-row form-row-wide create-account">
				<input class="input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true) ?> type="checkbox" name="createaccount" value="1" /> <label for="createaccount" class="checkbox"><?php _e( 'Create an account?', 'woocommerce' ); ?></label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( ! empty( $checkout->checkout_fields['account'] ) ) : ?>

			<div class="create-account">

				<p><?php _e( 'Create an account by entering the information below. If you are a returning customer please login at the top of the page.', 'woocommerce' ); ?></p>

				<?php foreach ( $checkout->checkout_fields['account'] as $key => $field ) : ?>

					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

				<?php endforeach; ?>

				<div class="clear"></div>

			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>

	<?php endif; ?>
</div>
