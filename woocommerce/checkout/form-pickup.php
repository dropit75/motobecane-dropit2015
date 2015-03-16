<div class="pickup_address">
	
	<h3>Pickup Details</h3>

	<p class="form-row form-row-first" id="shipping_pickup_first_name_field">
		<label for="shipping_pickup_first_name" class="">First Name</label>
		<input type="text" class="input-text " name="shipping_pickup_first_name" id="shipping_pickup_first_name" placeholder="First Name" value="<?php echo $checkout->get_value('shipping_pickup_first_name'); ?>">
	</p>
	<p class="form-row form-row-first" id="shipping_pickup_company_field">
		<label for="shipping_pickup_company" class="">Last Name</label>
		<input type="text" class="input-text " name="shipping_pickup_company" id="shipping_pickup_company" placeholder="Last Name" value="<?php echo $checkout->get_value('shipping_pickup_company'); ?>">
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
