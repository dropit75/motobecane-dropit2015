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
<div data-hash="checkout-billing" <?php if ( is_user_logged_in() ): ?>class="hidden"<?php endif; ?> >
	<div class="container">
		<section id="billing-block" class="row">

			<div class="woocommerce-billing-fields">
				<h1>Billing Details</h1>
				<p>Lorem ipsum dolor sit amet, consectetur.</p>

				<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

				<div class="col-sm-12">
					<p class="col-sm-6 form-row" id="billing_first_name_field">
						<label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="First Name" value="<?php echo $checkout->get_value('billing_first_name'); ?>">
					</p>
					<p class="col-sm-6 form-row" id="billing_last_name_field">
						<label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Last Name" value="<?php echo $checkout->get_value('billing_last_name'); ?>">
					</p>
					<p class="col-sm-6 form-row" id="billing_company_field">
						<label for="billing_company" class="">Company Name</label>
						<input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="Company Name" value="<?php echo $checkout->get_value('billing_company'); ?>">
					</p>
					<p class="col-sm-6 form-row" id="billing_phone_field">
						<label for="billing_phone" class="">Phone</label>
						<input type="text" class="input-text " name="billing_phone" id="billing_phone" placeholder="Phone" value="<?php echo $checkout->get_value('billing_phone'); ?>">
					</p>
					<p class="col-sm-6 form-row address-field" id="billing_address_1_field">
						<label for="billing_address_1" class="">Address1 <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="<?php echo $checkout->get_value('billing_address_1'); ?>">
					</p>
					<p class="col-sm-6 form-row address-field" id="billing_address_2_field">
						<label for="billing_address_2" class="">Address2</label>
						<input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="<?php echo $checkout->get_value('billing_address_2'); ?>">
					</p>
					<p class="col-sm-6  form-row address-field" id="billing_postcode_field">
						<label for="billing_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip" value="<?php echo $checkout->get_value('billing_postcode'); ?>">
					</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-6 form-row" id="billing_email_field">
						<label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label>
						<input type="text" class="input-text " name="billing_email" id="billing_email" placeholder="Email Address" value="<?php echo $checkout->get_value('billing_email'); ?>">
					</p>

				<?php do_action('woocommerce_after_checkout_billing_form', $checkout ); ?>
				<input class="input-checkbox hidden" id="createaccount" checked="checked" type="checkbox" name="createaccount" value="1" />
				<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>
					<p class="col-sm-6 form-row" id="account_password_field">
						<label for="account_password" class="">Créez un mot de passe *</label>
						<input type="text" class="input-text" name="account_password" id="account_password" placeholder="Créez un mot de passe *" value="">
					</p>
				<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
				</div>
			</div>

		</section>
	</div>
</div>

