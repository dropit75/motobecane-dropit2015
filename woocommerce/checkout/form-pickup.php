<?php

// edited by wai

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div data-hash="checkout-pickup">
	<div class="container">
		<section id="pickup-block" class="row">
			<div id="checkout-pickup" class="woocommerce-pickup-fields col-sm-12">
				<div class="row">
					<h1 class="col-xs-12"><?php _e( 'Pickup adresse', 'woocommerce' ); ?></h1>
					<p class="col-xs-12"><?php _e( 'Lorem ipsum dolor sit amet.', 'woocommerce' ); ?></p>
				</div>

				<div class="row">
					<div class="col-sm-12 pickup_select">
						<div class="row" data-toggle="buttons">
							<div class="col-sm-6">
								<button id="pickup-from-same-address-button" class="btn btn-order btn-block btn-checkout"><i class="fa fa-home fa-2x hidden-xs"></i><i class="fa fa-home fa-3x visible-xs"></i> FROM FACTURE ADDRESS</button>
							</div>
							<div class="col-sm-6 pickup-from-different-address">
								<button id="pickup-from-different-address-button" class="btn btn-order btn-block"><i class="fa fa-crosshairs fa-2x hidden-xs"></i><i class="fa fa-crosshairs fa-3x visible-xs"></i> FROM OTHER ADDRESS</button>
							</div>
						</div>
					</div>

					<div class="col-sm-12 pickup_address">
						<?php do_action( 'woocommerce_before_checkout_pickup_form', $checkout ); ?>

						<?php 
						// order the keys for your custom ordering or delete the ones you don't need
						$mypickupfields=array(
						    "shipping_pickup_first_name",
						    "shipping_pickup_last_name",
							"shipping_pickup_company",
						    "shipping_pickup_address_1",
						    "shipping_pickup_address_2"
						);

						foreach ($mypickupfields as $key) : ?>
							<?php print_r($checkout); ?>
							
						<?php endforeach; ?>

						<div class="col-xs-12">
							<button type="button" id="pickup-next-btn" class="btn btn-order btn-block btn-checkout"  disabled="disabled">NEXT</button>
						</div>
						<?php do_action( 'woocommerce_after_checkout_pickup_form', $checkout ); ?>
					</div>
					<div class="col-sm-12">
						<div class="col-xs-12">
							<div id="pickup-back-btn" class="btn-link btn-back pull-left">&lt; BACK</div>
							<div id="pickup-from-same-address-link" class="btn-link hide pull-right">Shipping to your Office &gt; </div>
						</div>
					</div>
				</div>

			</div>
		</section>
	</div>
</div>
