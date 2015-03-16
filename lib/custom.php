<?php


/**
 * Custom functions
 */



function load_google_fonts() {
	/*
	wp_register_style('googleFonts',@import url(http://fonts.googleapis.com/css?family=Cabin:400,700); 'http://fonts.googleapis.com/css?family=Lato:400,700,900,900italic');
	*/
	// wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Pathway+Gothic+One');
	// wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Raleway:100,700,900');
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:100,300,900');
	wp_enqueue_style( 'googleFonts');
}

add_action('wp_print_styles', 'load_google_fonts');

function drop_body( $d_name ) {
	$page_name = $d_nane ;
	$page = get_post($page_name, 'OBJECT' , 'edit');
	$page_include_body = apply_filters( 'the_content',$page->post_content);
	return $page_include_body ;
}

function drop_title( $d_nane ) {
	$page_name = $d_nane ;
	$page = get_post($page_name, 'OBJECT' , 'edit');
	$page_include_title = apply_filters( 'the_title',$page->post_title);						
	return $page_include_title ;
}

function my_deregister_styles() {
	wp_deregister_style( 'contact-form-7' );
	// wp_deregister_style( 'simple-instagram' );
	// wp_deregister_style( 'woocommerce-product-addons' );
}
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_script() {
	wp_deregister_script( 'contact-form-7' );
	// wp_deregister_style( 'woocommerce-product-addons' );

}
add_action( 'wp_print_scripts', 'my_deregister_script', 100 );

/**
 *  Woocommerce
 */

// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_theme_support( 'woocommerce' );


//
// Product Page
//

// Remove parts from Product Area

// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);


// Remove parts from After Product

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


// ADD custom fields

// add_action('woocommerce_before_add_to_cart_button','dropadress_form');
// add_filter('woocommerce_add_cart_item_data', 'custom_add_item_data', 10, 2);
// add_filter('woocommerce_get_cart_item_from_session','wc_get_cart_item_from_session',10,2);
// add_filter('woocommerce_get_item_data', 'xatik_wc_get_item_data', 10, 2);
// add_action('woocommerce_add_order_item_meta', 'xatik_wc_order_item_meta', 10, 2);
// load_child_theme_textdomain('yit', get_stylesheet_directory().'/languages');
// load_child_theme_textdomain('woocommerce', get_stylesheet_directory().'/languages');


// function dropadress_form(){



//     echo '<div id="dropadress_form" class="row">';
//     echo '
// <div class="col-sm-6 mb-sm form-group">
// <label for="drop-adress1" class="sr-only">' . _x('drop address', 'woocommerce') . '</label>
// <input type="text" name="drop-adress1" id="drop-adress1" class="form-control input-drop col-sm-6" placeholder="' . _x('Drop address', 'woocommerce') . ' *" value="" required="required" pattern="" title="">
// </div>
// <div class="col-sm-6 mb-sm form-group">
// <label for="drop-adress2" class="sr-only">Précisez code / escalier / étage</label>
// <input type="text" name="drop-adress2" id="drop-adress2" class="form-control input-drop col-sm-6" placeholder="Précisez code / escalier / étage" value="" pattern="" title="">
// </div>
// <div class="col-sm-6 mb-sm form-group">
// <label for="drop-name" class="sr-only">Nom</label>
// <input type="text" name="drop-name" id="drop-name" class="form-control input-drop col-sm-6" placeholder="Nom *" value="" required="required" pattern="" title="">
// </div>
// <div class="col-sm-6 mb-sm form-group">
// <label for="drop-phone" class="sr-only">Phone</label>
// <input type="text" name="drop-phone" id="drop-phone" class="form-control input-drop col-sm-6" placeholder="Phone" value="" pattern="" title="">
// </div>
// </div>';
// }



// function custom_add_item_data($cart_item_meta, $product_id){

//     //var_dump($_POST);
//     if(isset($_POST['drop-adress1'])){
//         $cart_item_meta['dropinfo_data']['drop-adress1'] = $_POST['drop-adress1'];
//     }
//     if(isset($_POST['drop-adress2'])){
//         $cart_item_meta['dropinfo_data']['drop-adress2'] = $_POST['drop-adress2'];
//     }
//     if(isset($_POST['drop-name'])){
//         $cart_item_meta['dropinfo_data']['drop-name'] = $_POST['drop-name'];
//     }
//     if(isset($_POST['drop-phone'])){
//         $cart_item_meta['dropinfo_data']['drop-phone'] = $_POST['drop-phone'];
//     }

//     return $cart_item_meta;
// }


// function wc_get_cart_item_from_session($cart_item, $values) {

//     //var_dump($values);
//     //var_dump($cart_item);
//     if (isset($values['dropinfo_data'])) {
//         $cart_item['dropinfo_data'] = $values['dropinfo_data'];
//     }

//     return $cart_item;
// }


// function xatik_wc_get_item_data($other_data, $cart_item) {

//         if (isset($cart_item['dropinfo_data'])) {

//             $data = $cart_item['dropinfo_data'];

//             $other_data[0] = array('name' => 'Adresse', 'value' => $data['drop-adress1']);
//             $other_data[1] = array('name' => 'Code', 'value' => $data['drop-adress2']);
//             $other_data[2] = array('name' => 'Name', 'value' => $data['drop-name']);
//             $other_data[3] = array('name' => 'Phone', 'value' => $data['drop-phone']);

//         }

//     return $other_data;
// }


// function xatik_wc_order_item_meta($item_id, $cart_item) {

//     var_dump($item_id);
//     var_dump($cart_item);

// 	 $data = $cart_item['dropinfo_data'];

// 	    if ( ! empty( $cart_item['dropinfo_data'] ) )
// 	        woocommerce_add_order_item_meta( $item_id, 'Address', $data['drop-adress1'] );
// 	        woocommerce_add_order_item_meta( $item_id, 'Code', $data['drop-adress2'] );
// 	        woocommerce_add_order_item_meta( $item_id, 'Name', $data['drop-name'] );
// 	        woocommerce_add_order_item_meta( $item_id, 'Phone', $data['drop-phone'] );
// }






//
// Checkout Page
//




// login form


add_filter('woocommerce_login_redirect', 'wc_login_redirect');

function wc_login_redirect( $redirect_to ) {
	
    $redirect_to = $_SERVER['HTTP_REFERER'];
    // return $redirect_to;
    wp_safe_redirect($redirect_to);
    exit();
}



//Adding Registration fields to the form 

// add_filter( 'register_form', 'adding_custom_registration_fields' );
remove_action( 'register_form', 'cptch_register_form' );
add_action( 'register_form', 'adding_custom_registration_fields' );
add_action( 'register_form', 'cptch_register_form' );
function adding_custom_registration_fields( ) {

	//lets make the field required so that i can show you how to validate it later;
	echo '<div class="form-row form-row-wide"><label for="reg_firstname">'.__('First Name', 'woocommerce').' <span class="required">*</span></label>
<input type="text" class="input-text" name="firstname" id="reg_firstname" size="30" value="'.esc_attr($_POST['firstname']).'" /></div>';

}



//Validation registration form  after submission using the filter registration_errors
add_filter('registration_errors', 'registration_errors_validation', 10,3);
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
		global $woocommerce;
		extract($_POST);
		// extracting $_POST into separate variables
		if($firstname == '' ) {
			$woocommerce->add_error( __( 'Please, fill in all the required fields.', 'woocommerce' ) );
		}
		return $reg_errors;
}



//Updating use meta after registration successful registration
add_action('woocommerce_created_customer','adding_extra_reg_fields');

function adding_extra_reg_fields($user_id) {
	extract($_POST);
	update_user_meta($user_id, 'first_name', $firstname);


 //    update_user_meta($user_id, 'first_name', $firstname);
	// update_user_meta($user_id, 'billing_first_name', $firstname);
	// update_user_meta($user_id, 'shipping_first_name', $firstname);
}

 
// login modal error

// add_action( 'woocommerce_after_customer_login_form', 'wc_notice_test' );
add_action( 'woocommerce_before_customer_login_form', 'wc_print_notices', 10 );
remove_action( 'woocommerce_before_single_product', 'wc_print_notices', 10 );



// if ( (isset($_GET['action']) && $_GET['action'] != 'logout') || (isset($_POST['login_location']) && !empty($_POST['login_location'])) ) {
//         add_filter('login_redirect', 'my_login_redirect', 10, 3);
//         function my_login_redirect() {
//                 $location = $_SERVER['HTTP_REFERER'];
//                 wp_safe_redirect($location);
//                 exit();
//         }
// }
	

	// Add registration from

	// $user_firstname = isset( $_POST['firstname'] ) ? trim( $_POST['firstname'] ) : '';
	// $user_lastname = isset( $_POST['lastname'] ) ? trim( $_POST['lastname'] ) : '';

	// $new_customer_data = array(
	// 	'user_login' => $sanitized_user_login,
	// 	'user_pass'  => $password,
	// 	'user_email' => $user_email,
	// 	'role'       => 'customer',
	// 	'first_name' => $user_firstname,
	// 	'last_name' => $user_lastname
	// );


// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );


// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {

	//
	// Billing form
	//

	// Keep on billing form	

	// unset($fields['billing']['billing_first_name']);
	// unset($fields['billing']['billing_last_name']);
	// unset($fields['billing']['billing_company']);
	// unset($fields['billing']['billing_address_1']);
	// unset($fields['billing']['billing_address_2']);
	// unset($fields['billing']['billing_email']);
	// unset($fields['billing']['billing_phone']);

	// // remove city name
	// unset($fields['billing']['billing_city']);
	
	// // remove postal code
	// unset($fields['billing']['billing_postcode']);

	// // remove country
	// unset($fields['billing']['billing_country']);



	// // change first name field
	// $fields['billing']['billing_first_name'] = array(
	// 	'label'     => __('Votre Prénom *', 'woocommerce'),
	// 	'placeholder'   => _x('Votre Prénom *', 'placeholder', 'woocommerce'),
	// 	'required'  => true,
	// 	'class'     => array('col-sm-6 dropform form-group'),
	// 	'clear'     => true
	// );

	// // change last name field
	// $fields['billing']['billing_last_name'] = array(
	// 	'label'     => __('Votre Nom *', 'woocommerce'),
	// 	'placeholder'   => _x('Votre Nom *', 'placeholder', 'woocommerce'),
	// 	'required'  => true,
	// 	'class'     => array('col-sm-6 dropform form-group'),
	// 	'clear'     => true
	// );

	// // change campany name field
	// $fields['billing']['billing_company'] = array(
	// 	'label'     => __('Nom de l\'entreprise', 'woocommerce'),
	// 	'placeholder'   => _x('Nom de l\'entreprise', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group'),
	// 	'clear'     => true
	// );

	// // change phone field
	// $fields['billing']['billing_phone'] = array(
	// 	'label'     => __('Téléphone ', 'woocommerce'),
	// 	'placeholder'   => _x('Téléphone ', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group'),
	// 	'clear'     => true
	// );

	// // change address1 field
	// $fields['billing']['billing_address_1'] = array(
	// 	'label'     => __('Adresse#1 *', 'woocommerce'),
	// 	'placeholder'   => _x('Adress *', 'placeholder', 'woocommerce'),
	// 	'required'  => true,
	// 	'class'     => array('col-sm-6 dropform form-group'),
	// 	'clear'     => true
	// );

	// // change adress2 field
	// $fields['billing']['billing_address_2'] = array(
	// 	'label'     => __('Adresse#2', 'woocommerce'),
	// 	'placeholder'   => _x('Précisez code / escalier / etage', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group'),
	// 	'clear'     => true
	// );

	// // change email field
	// $fields['billing']['billing_email'] = array(
	// 	'label'     => __('Adresse email *', 'woocommerce'),
	// 	'placeholder'   => _x('Adresse email *', 'placeholder', 'woocommerce'),
	// 	'required'  => true,
	// 	'class'     => array('col-sm-6 dropform form-group'),
	// 	'clear'     => true
	// );





	//
	// Shipping (pickup) form
	//

	// Keep on Shipping (pickup) form	

	// unset($fields['shipping']['shipping_first_name']);
	// unset($fields['shipping']['shipping_company']);
	// unset($fields['shipping']['shipping_address_1']);
	// unset($fields['shipping']['shipping_address_2']);
	// unset($fields['shipping']['shipping_email']);
	// unset($fields['shipping']['shipping_phone']);

	// remove last name
	// unset($fields['shipping']['shipping_last_name']);

	// remove city name
	// unset($fields['shipping']['shipping_city']);
	
	// // remove postal code
	// unset($fields['shipping']['shipping_postcode']);

	// // remove country
	// unset($fields['shipping']['shipping_country']);
	
	// // remove email
	// unset($fields['shipping']['shipping_email']);


	// // change campany name field
	// $fields['shipping']['shipping_company'] = array(
	// 	'label'     => __('Company name', 'woocommerce'),
	// 	'placeholder'   => _x('Company name', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );

	// // change address1 field
	// $fields['shipping']['shipping_address_1'] = array(
	// 	'label'     => __('Adresse#1', 'woocommerce'),
	// 	'placeholder'   => _x('Adresse *', 'placeholder', 'woocommerce'),
	// 	'required'  => true,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );

	// // change first name field
	// $fields['shipping']['shipping_first_name'] = array(
	// 	'label'     => __('Name', 'woocommerce'),
	// 	'placeholder'   => _x('Name *', 'placeholder', 'woocommerce'),
	// 	'required'  => true,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );

	// // change last name field
	// $fields['shipping']['shipping_last_name'] = array(
	// 	'label'     => __('Last Name', 'woocommerce'),
	// 	'placeholder'   => _x('Last Name', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group hide')
	// );

	// // change adress2 field
	// $fields['shipping']['shipping_address_2'] = array(
	// 	'label'     => __('Adresse#2', 'woocommerce'),
	// 	'placeholder'   => _x('Précisez code / escalier / etage', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );


	// // add Pickup name in Pickup field
	// $fields['shipping']['shipping_pickup_first_name'] = array(
	// 	'label'     => __('First name', 'woocommerce'),
	// 	'placeholder'   => _x('First name', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );

	// // add Pickup name in Pickup field
	// $fields['shipping']['shipping_pickup_last_name'] = array(
	// 	'label'     => __('Last name', 'woocommerce'),
	// 	'placeholder'   => _x('Last name', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group hide')
	// );

	// // add Pickup name in Pickup field
	// $fields['shipping']['shipping_pickup_company'] = array(
	// 	'label'     => __('Company name', 'woocommerce'),
	// 	'placeholder'   => _x('Company name', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );

	// // add Pickup name in Pickup field
	// $fields['shipping']['shipping_pickup_address_1'] = array(
	// 	'label'     => __('Adresse#1', 'woocommerce'),
	// 	'placeholder'   => _x('Adresse#1', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );

	// // add Pickup name in Pickup field
	// $fields['shipping']['shipping_pickup_address_2'] = array(
	// 	'label'     => __('Adresse#2', 'woocommerce'),
	// 	'placeholder'   => _x('Adresse#2', 'placeholder', 'woocommerce'),
	// 	'required'  => false,
	// 	'class'     => array('col-sm-6 dropform form-group')
	// );


	// change adress2 field
	// $fields['order']['order_comments'] = array(
	// 	'label'     => __('', 'woocommerce'),
	// 	'placeholder'   => _x('Anything else ?', 'placeholder', 'woocommerce'),
	// 	'type' => 'textarea',
	// 	'class'     => array('col-xs-12 dropform form-group'),
	// 	'clear'     => true
	// );


	// change password field
	$fields['account']['account_password']['class'] = array('col-sm-6 dropform form-group');
	$fields['account']['account_password']['label'] = __('Créez un mot de passe *', 'woocommerce');
	$fields['account']['account_password']['placeholder'] = __('Créez un mot de passe *', 'placeholder', 'woocommerce');

     return $fields;

}


/**
 * Display field value on the order edition page
 **/

// add_action( 'woocommerce_admin_order_data_after_shipping_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

// function my_custom_checkout_field_display_admin_order_meta($order){
//     echo '<h4>'.__('Pickup Details').'</h4>';
//     echo '<p><strong>'.__('Address').': </strong><br />';
//     echo $order->shipping_pickup_first_name .'<br />';
//     echo $order->shipping_pickup_company .'<br />';
//     echo $order->shipping_pickup_address_1 .'<br />';
//     echo $order->shipping_pickup_address_2 .'</p>';

// }



// /**
//  * Add the field to the checkout
//  */
// add_action( 'woocommerce_before_checkout_pickup_form', 'my_custom_checkout_field' ); 
// function my_custom_checkout_field( $checkout ) {
// 	// echo 'testtet';
// }

// /**
//  * Process the checkout
//  */
// add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');
// function my_custom_checkout_field_process() {
//     // Check if set, if its not set add an error.
//     if ( ! $_POST['my_field_name'] )
//         wc_add_notice( __( 'Please enter something into this new shiny field.' ), 'error' );
// }

// /**
//  * Update the order meta with field value
//  */
// add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );
// function my_custom_checkout_field_update_order_meta( $order_id ) {
//     if ( ! empty( $_POST['my_field_name'] ) ) {
//         update_post_meta( $order_id, 'My Field', sanitize_text_field( $_POST['my_field_name'] ) );
//     }
// }







/**
 * Add pickup fields in carousel
 */
add_action( 'woocommerce_checkout_pickup', 'checkout_form_pickup' );

function checkout_form_pickup() {
	wc_get_template( 'checkout/form-pickup.php', array( 'checkout' => $this ) );
}


// PASS WORD COMFIRM

// // place the following code in your theme's functions.php file
// // Add a second password field to the checkout page.
// add_action( 'woocommerce_checkout_init', 'wc_add_confirm_password_checkout', 10, 1 );
// function wc_add_confirm_password_checkout( $checkout ) {
// 	if ( get_option( 'woocommerce_registration_generate_password' ) == 'no' ) {
// 		$checkout->checkout_fields['account']['account_password2'] = array(
// 			'type' 				=> 'password',
// 			'label' 			=> __( 'Confirm password', 'woocommerce' ),
// 			'required'          => true,
// 			'class'     => array('col-xs-6 dropform form-group'),
// 			'placeholder' 		=> _x( 'Confirm Password', 'placeholder', 'woocommerce' )
// 		);
// 	}
// }
 
// // Check the password and confirm password fields match before allow checkout to proceed.
// add_action( 'woocommerce_after_checkout_validation', 'wc_check_confirm_password_matches_checkout', 10, 2 );
// function wc_check_confirm_password_matches_checkout( $posted ) {
// 	$checkout = WC()->checkout;
// 	if ( ! is_user_logged_in() && ( $checkout->must_create_account || ! empty( $posted['createaccount'] ) ) ) {
// 		if ( strcmp( $posted['account_password'], $posted['account_password2'] ) !== 0 ) {
// 			wc_add_notice( __( 'Passwords do not match.', 'woocommerce' ), 'error' );
// 		}
// 	}
// }



// Remove coupon from checkout page

// add_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
// remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
// remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
// add_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 20 );



//
//
//  Filter General Custom
//
//
		
// Woocommerce CSS off
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// woocommerce header off 
//add_filter('woocommerce_show_page_title', '__return_false');
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

// woocommerce image off
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );


//-- Remove auto P,BR -
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

//----------



// Load up our awesome theme options

require_once ( get_stylesheet_directory() . '/theme-options.php' );

/**
 * Add store location select dropdown in checkout page
 **/
// add_filter( 'woocommerce_checkout_fields' , 'custom_store_pickup_field');

// function custom_store_pickup_field( $fields ) {
// 	$fields['shipping']['store_pickup'] = array(
// 		'type'=>'select',
// 		'options'=>array(
// 			'option_1' => 'Option 1 text',
// 			'option_2' => 'Option 2 text',
// 			'option_3' => 'Option 2 text'
// 		),
// 		'label' => __('Store Pick Up Location', 'woocommerce'),
// 		'required' => false,
// 		'class' => array('store-pickup form-row-wide'),
// 		'clear' => true
// 	);
// 	return $fields;
// }

