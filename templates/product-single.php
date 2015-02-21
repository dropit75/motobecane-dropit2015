
<div class="container-full jumbo-full jumbo-product">
	<div class="container">
				<?php
				global $woocommerce;
				$woocommerce->cart->empty_cart(); 
				woocommerce_content();
				?>
	</div>
</div>
