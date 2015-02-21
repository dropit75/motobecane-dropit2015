<div class="container-full jumbo-checkout-info jumbo-full">
	<div class="container">
		<div class="row">
			<div class="col-xs-9">
				<h3>LOGISTIQUE PHOTO ET CINÉMA 8H BANLIEU</h3>
			</div>
			<div class="col-xs-3">
				<ul class="nav">
					<li>
						<a class="pull-right showlogin"><i class="fa fa-user"></i> CONNEXION</a>						
					</li>	
					<li>
						<a class="pull-right showcoupon"><i class="fa fa-money"></i> COUPON</a>
					</li>					
				</ul>
			</div>
		</div>
		<?php 
		wc_print_notices();
		do_action( 'woocommerce_before_checkout_form', $checkout );
		?>
	</div>
</div>