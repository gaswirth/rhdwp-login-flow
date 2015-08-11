<?php
/**
 * The Login Form template file.
 *
 * @package WordPress
 * @subpackage rhd-login-flow
 */
?>

<div class="login-form-container">
	<?php if ( $attributes['show_title'] ) : ?>
		<h2><?php _e( 'Sign In', 'rhd-login-flow' ); ?></h2>
	<?php endif; ?>

	<!-- Show errors if there are any -->
	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
	    <?php foreach ( $attributes['errors'] as $error ) : ?>
	        <p class="login-error">
	            <?php echo $error; ?>
	        </p>
	    <?php endforeach; ?>
	<?php endif; ?>

	<!-- Show logged out message if user just logged out -->
	<?php if ( $attributes['logged_out'] ) : ?>
		<p class="login-info signed-out">
			<?php _e( 'You have signed out. Would you like to sign in again?', 'rhd-login-flow' ); ?>
		</p>
	<?php endif; ?>


	<?php
		$login_args = array(
			'redirect' => $attributes['redirect_to'],
			'label_username' => 'Your Email',
			'label_password' => 'Your Password',
			'label_log_in' => 'Sign in, Ninja',
			'remember' => true,
			'value_remember' => false,
			'form_id' => 'rhd-login-form'
		);
		wp_login_form( $login_args );
	?>

	<a class="forgot-password" href="<?php echo wp_lostpassword_url(); ?>">
		<?php _e( 'Forgot your password?', 'rhd-login-flow' ); ?>
	</a>
</div>