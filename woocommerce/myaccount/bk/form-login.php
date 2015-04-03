<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php wc_print_notices(); ?>

<div class="container-full jumbo-full">
	<div class="container">
		<div class="row" id="member_login">
			<div class="col-md-6 col-md-offset-3 col-sm-12">
<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

	<div class="col2-set" id="customer_login">

		<div class="col-1">

<?php endif; ?>

		<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>

<!-- <?php global $woocommerce; ?> -->

		<form method="post" class="login">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
			
			<div id="login-input-set">
				<p class="form-row form-row-wide">
					<label for="username"><?php _e( 'email address', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text input-drop form-control" name="username" id="username" placeholder="<?php _e( 'email address', 'woocommerce' ); ?>" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</p>
				<p class="form-row form-row-wide">
					<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input class="input-text input-drop form-control" type="password" name="password" id="password" placeholder="<?php _e( 'Password', 'woocommerce' ); ?>"/>
				</p>
				<p class="lost_password small">
					<a class="smalllink" href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost your Password?', 'woocommerce' ); ?></a>
				</p>
			</div>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<div id="login-input-btn" class="form-row">
				<p class="form-row form-row-wide">
					<?php wp_nonce_field( 'woocommerce-login' ); ?>
					<input type="submit" class="button btn btn-dropit btn-block" name="login" value="<?php _e( 'Login', 'woocommerce' ); ?>" />
				</p>
				<a class="smalllink small" id="login-close-botton" data-dismiss="modal"><?php _e( 'Make Account Later', 'woocommerce' ); ?></a>
				<?php if( is_page('my-account')): ?>
					<a class="smalllink small" id="login-close-botton-home" href="/" ><?php _e( 'Go to Top page', 'woocommerce' ); ?></a>
				<?php endif; ?>

			</div>

			<p class="form-row">
				
				<label for="rememberme" class="inline">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever" checked="checked" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
				</label>
			</p>


			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

	</div>

	<div class="col-2">

		<h2><?php _e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="register">

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="form-row form-row-wide">
					<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text input-drop form-control" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</p>

			<?php endif; ?>

			<p class="form-row form-row-wide">
				<label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input type="email" class="input-text input-drop form-control" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
	
				<p class="form-row form-row-wide">
					<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="password" class="input-text input-drop form-control" name="password" id="reg_password" value="<?php if ( ! empty( $_POST['password'] ) ) echo esc_attr( $_POST['password'] ); ?>" />
				</p>

			<?php endif; ?>

			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-register' ); ?>
				<input type="submit" class="button" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>" />
			</p>


			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

			</div>
		</div>
	</div>
</div>
