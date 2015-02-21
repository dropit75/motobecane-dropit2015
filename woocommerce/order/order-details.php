<?php
/**
 * Order details
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

$order = 	new WC_Order( $order_id );
$tax = 	$order->get_total_tax();



if ( sizeof( $order->get_items() ) > 0 ) {
	foreach( $order->get_items() as $item ) {
		$_product     = apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item );
		$item_meta    = new WC_Order_Item_Meta( $item['item_meta'], $_product );

		// get name  - wai
		$product_name = apply_filters( 'woocommerce_order_item_name', $item['name'], $item );
	}
}
?>

<div class="container-full jumbo-order-detail-head" id="order-detail-head">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12">
						<h2><?php echo $product_name; ?></h2>
					</div>
				</div>

				<div class="row order-number">
					<div class="col-sm-12">
						<p>
							
						</p>
					</div>
				</div>			
			</div>
		</div>
	</div>
		
		<div class="row date-and-status">
			<div class="col-sm-10 col-sm-offset-1">

					<div class="col-sm-4">
						<p>
							<i class="fa fa-bookmark"></i> <?php _e( 'Order:', 'woocommerce' ); ?> <?php echo $order->get_order_number(); ?>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<i class="fa fa-shopping-cart"></i> <?php _e( 'Order date', 'woocommerce' ); ?> : <?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<i class="fa fa-question-circle"></i> <?php _e( 'Status', 'woocommerce' ); ?> : <?php echo wc_get_order_status_name( $order->get_status() ); ?>
						</p>
					</div>

			</div>
		</div>

</div>
<div class="container-full jumbo-order-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12">	
			
				<div class="col-sm-4 col-sm-push-4">
					<div class="hidden-xs"><i class="fa fa-arrow-circle-o-up fa-5x"></i></div>
					<h3><i class="fa fa-arrow-circle-o-up icon-xs"></i> <?php _e( 'Pickup location', 'woocommerce' ); ?></h3>
					<address class="point">

						<p class="normal"><?php print_r($order ->shipping_pickup_first_name) ; ?><?php print_r($order ->shipping_pickup_last_name) ; ?></p>
						<p class="small"><?php print_r($order ->shipping_pickup_company) ; ?></p>
						<p class="normal"><?php print_r($order ->shipping_pickup_address_1) ; ?></p>
						<p class="small"><?php print_r($order ->shipping_pickup_address_2) ; ?></p>
						
					</address>
				</div>
			
				<div class="col-sm-4 col-sm-push-4">
					<div class="hidden-xs"><i class="fa fa-arrow-circle-o-down fa-5x"></i></div>
					<h3><i class="fa fa-arrow-circle-o-down icon-xs"></i> <?php _e( 'Drop off location', 'woocommerce' ); ?></h3>
					<address class="point">
						<p class="normal"><?php print_r($order ->shipping_first_name) ; ?> <?php print_r($order ->shipping_last_name) ; ?></p>
						<p class="small"><?php print_r($order ->shipping_company) ; ?></p>
						<p class="normal"><?php print_r($order ->shipping_address_1) ; ?></p>
						<p class="small"><?php print_r($order ->shipping_address_2) ; ?></p>

					</address>
				</div>
			
				<div class="col-sm-4 col-sm-pull-8">

					<div class="row detail-block">
						<div class="detail-icon col-sm-3 hidden-xs">
							<i class="fa fa-euro fa-3x"></i>
						</div>
						<div class="detail-text col-sm-9">
							<h3><i class="fa fa-home fa-euro icon-xs"></i> <?php _e( 'Total', 'woocommerce' ); ?></h3>
							<p><?php echo $order->get_formatted_order_total(); ?> TTC ( TAX : €<?php echo $tax; ?> )</p>
						</div>
					</div>
					<div class="row detail-block">
						<div class="detail-icon col-sm-3 hidden-xs">
							<i class="fa fa-credit-card fa-3x"></i>
						</div>
						<div class="detail-text col-sm-9">
							<h3><i class="fa fa-credit-card icon-xs"></i> <?php _e( 'Payment', 'woocommerce' ); ?></h3>
							<p><?php echo $order->payment_method_title; ?></p>
						</div>
					</div>
					<div class="row detail-block">
						<div class="detail-icon col-sm-3 hidden-xs">
							<i class="fa fa-home fa-3x"></i>
						</div>
						<div class="detail-text col-sm-9">
							<h3><i class="fa fa-home icon-xs"></i> <?php _e( 'Client detail', 'woocommerce' ); ?></h3>
							<p><?php echo $order->get_formatted_billing_address(); ?></p>
							<p><?php echo $order->billing_phone; ?><br /><?php echo $order->billing_email; ?></p>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>









