<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<div class="container-full jumbo-thankyou-title" data-stellar-background-ratio="0">
	<div class="container">
		<div class="row">
			
<?php

global $woocommerce;

if ( $order ) : ?>

	<?php if ( in_array( $order->status, array( 'failed' ) ) ) : ?>

		<div class="col-sm-12"><h1><?php _e( 'Sorry. some problems happen...', 'woocommerce' ); ?></h1></div>

		<div class="col-sm-12">
			<h4><?php
				if ( is_user_logged_in() )
					_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
				else
					_e( 'Please attempt your purchase again.', 'woocommerce' );
			?></h4>

			<p>	
				<a href="/" class="button pay btn btn-dropit-mini"><?php _e( 'Home', 'woocommerce' ) ?></a>
				<!--<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay btn btn-dropit-mini"><?php _e( 'Pay', 'woocommerce' ) ?></a>-->
				<?php if ( is_user_logged_in() ) : ?>
				<a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>" class="button pay btn btn-dropit-mini"><?php _e( 'My Account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>
		</div>


		</div>
	</div>
</div>

	<?php else : ?>

			<div class="col-sm-12">
				<h1><?php _e( 'Thank you *', 'woocommerce' ); ?></h1>
				<p><?php _e( 'Your order has been received.', 'woocommerce' ); ?></p>
				<!-- <h1><?php _e( 'Thank you. Your order has been received.', 'woocommerce' ); ?></h1> -->
			</div>

		</div>
	</div>
	<div class="row down-arrow">
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
			<a href="#order-detail-head">
				<button class="btn btn-dropit btn-block">
					<i class="fa fa-angle-double-down fa-2x"></i>
				</button>
			</a>
		</div>
	</div>
</div>

	<?php endif; ?>

	<!--<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>-->
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>
	<div class="container-full jumbo-thankyou-title">
		<div class="container">
			<div class="row">
				<div class="col-sm-12"><h1><?php _e( 'Thank you. Your order has been received.', 'woocommerce' ); ?></h1></div>
			</div>
		</div>
	</div>
<?php endif; ?>