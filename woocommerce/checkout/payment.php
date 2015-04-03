<?php
/**
 * Checkout Payment Section
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php if ( ! is_ajax() ) : ?>
	<?php do_action( 'woocommerce_review_order_before_payment' ); ?>
<?php endif; ?>

<div data-hash="checkout-payment">
	<div class="container">
		<section id="payment-block" class="row">

			

				<?php if ( WC()->cart->needs_payment() ) : ?>

					<h1 class="col-xs-12"><?php _e( 'Payment method', 'woocommerce' ); ?></h1>
					<p>Lorem ipsum dolor sit amet, consectetur.</p>

					<div class="col-sm-12 payment_select">
						<div class="row" data-toggle="buttons">
							<div class="col-sm-4">
							  <a id="payment-btn-bacs" class="btn btn-order btn-block payment-next-btn">
							    <input class="btn-checkout" id="payment_method_bacs" type="radio" name="payment_method" value="bacs" data-order_button_text="">
							    <i class="fa fa-file-text-o"></i> BY INVOICE
							  </a>
							</div>
							<div class="col-sm-4">
							  <a id="payment-btn-cheque" class="btn btn-order btn-block payment-next-btn">
							    <input class="btn-checkout" id="payment_method_cod" type="radio" name="payment_method" value="cod" data-order_button_text="">
							    <i class="fa fa-money"></i> CASH ON DELIVERY
							  </a>
							</div>
							<div class="col-sm-4">
							  <a id="payment-btn-paypal" class="btn btn-order btn-block payment-next-btn">
							    <input class="btn-checkout" id="payment_method_paypal" type="radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
							    <i class="fa fa-paypal"></i> PAYPAL
							  </a>
							</div>
						</div>


					</div>

				<?php endif; ?>

		

		</section>
	</div>
</div>



<div data-hash="checkout-memo">
	<div class="container">
		<section id="memo-block" class="row">

			<div id="memo" class="woocommerce-checkout-memo">

				<h1 class="col-xs-12"><?php _e( 'Memo', 'woocommerce' ); ?></h1>
				<p>Lorem ipsum dolor sit amet, consectetur.</p>

				<div class="form-row">
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
		</section>
	</div>
</div>



<div data-hash="checkout-submit">
	<div class="container">
		<section id="submit-block" class="row">


			<div id="submit-btn" class="woocommerce-checkout-submit">


				<div class="form-row place-order">

					<noscript><?php _e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ); ?><br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php _e( 'Update totals', 'woocommerce' ); ?>" /></noscript>

					<?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>

					<?php do_action( 'woocommerce_review_order_before_submit' ); ?>

					<?php echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' ); ?>

					<?php if ( wc_get_page_id( 'terms' ) > 0 && apply_filters( 'woocommerce_checkout_show_terms', true ) ) : ?>
						<p class="form-row terms">
							<label for="terms" class="checkbox"><?php printf( __( 'I&rsquo;ve read and accept the <a href="%s" target="_blank">terms &amp; conditions</a>', 'woocommerce' ), esc_url( wc_get_page_permalink( 'terms' ) ) ); ?></label>
							<input type="checkbox" class="input-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); ?> id="terms" />
						</p>
					<?php endif; ?>

					<?php do_action( 'woocommerce_review_order_after_submit' ); ?>
				</div>

			</div>

		</section>
	</div>
</div>
