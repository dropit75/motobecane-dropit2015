
<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

// get_template_part('templates/checkout', 'info'); 

?>

<div class="container-full jumbo-checkout jumbo-full">

<!-- <h1 id="progress-title-drop">DROP ADDRESS</h1>
<h1 id="progress-title-pick">PICK UP ADDRESS</h1>
<h1 id="progress-title-payment">PAYMENT METHOD</h1>
<h1 id="progress-title-add">ADDITIONAL INFORMATION</h1>
<div class="progress-step">
<div class="row">
<div class="col-xs-3" id="progressDrop"><h5><span>1</span>drop</h5></div>
<div class="col-xs-3" id="progressPick"><h5><span>2</span>pickup</h5></div>
<div class="col-xs-3" id="progressPayment"><h5><span>3</span>payment</h5></div>
<div class="col-xs-3" id="progressAdd"><h5><span>4</span>order</h5></div>
</div>
</div> -->

<?php

	$loggedIn = false;
	if( is_user_logged_in()){
		$loggedIn = true;
	}
?>

<?php

// If checkout registration is disabled and not logged in, the user cannot checkout

if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>


<form name="checkout" id="checkout" method="post" class="checkout" action="<?php echo esc_url( $get_checkout_url ); ?>">

	<?php if ( ! is_user_logged_in() ): ?>
		<div class="checkout-carousel">
	<?php endif; ?>

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
		<?php do_action( 'woocommerce_checkout_billing' ); ?>
		<?php if ( is_user_logged_in() ): ?>
			<div class="checkout-carousel">
		<?php endif; ?>
		<!-- <?php do_action( 'woocommerce_checkout_pickup' ); ?> -->
		<?php do_action( 'woocommerce_checkout_shipping' ); ?>

	<?php endif; ?>

		<?php do_action( 'woocommerce_checkout_order_review' ); ?>

</div>
</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

</div>


