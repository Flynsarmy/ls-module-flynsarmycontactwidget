<?
	/*
	 * Initially taken from http://lemonstand.com/marketplace/module/contact/
	 * A few modifications to make the UI more friendly and support our widget options
	 */

	$name = post('name', '');
	$email = post('email', '');
	$message = post('message', '');
	$phone = post('phone', 'Phone');
?>
<?= open_form(array('onsubmit' => "return $(this).sendRequest('contact:on_submit')")) ?>
	<?= flash_message() ?>

	<?php if ( !empty($redirect_url) ): ?>
		<input type="hidden" name="redirect" value="<?= $redirect_url ?>" />
	<?php endif; ?>
	<input type="hidden" name="flash" value="<?= h($success_message) ?>" />

	<ul>
		<li>
			<input type="text" name="name" value="<?= $name ?>" placeholder="Your name" />
		</li>
		<li>
			<input type="text" name="email" value="<?= $email ?>" placeholder="your@email.com" />
		</li>
		<?php if ( $show_phone ): ?>
			<li>
				<input type="text" name="phone" value="<?= $phone ?>" placeholder="Your mobile number" />
			</li>
		<?php endif; ?>
		<li>
			<textarea name="message" cols="32" rows="12" placeholder="Enter your message here"><?= $message ?></textarea>
		</li>
	</ul>

	<input type="submit" value="Submit" />
<?= close_form() ?>