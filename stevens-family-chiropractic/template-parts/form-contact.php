<?php
/**
 * Contact Form
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;
?>

<form class="form" id="contact-form" data-form-type="contact" novalidate>
	<div class="form__message" id="contact-form-message" role="alert"></div>

	<div class="form__row">
		<div class="form__group">
			<label class="form__label" for="contact-name">
				<?php esc_html_e( 'Full Name', 'stevens-chiro' ); ?> <span class="required">*</span>
			</label>
			<input type="text" id="contact-name" name="name" class="form__input" required autocomplete="name">
			<div class="form__error" id="contact-name-error"><?php esc_html_e( 'Please enter your name.', 'stevens-chiro' ); ?></div>
		</div>
		<div class="form__group">
			<label class="form__label" for="contact-email">
				<?php esc_html_e( 'Email Address', 'stevens-chiro' ); ?> <span class="required">*</span>
			</label>
			<input type="email" id="contact-email" name="email" class="form__input" required autocomplete="email">
			<div class="form__error" id="contact-email-error"><?php esc_html_e( 'Please enter a valid email address.', 'stevens-chiro' ); ?></div>
		</div>
	</div>

	<div class="form__row">
		<div class="form__group">
			<label class="form__label" for="contact-phone">
				<?php esc_html_e( 'Phone Number', 'stevens-chiro' ); ?>
			</label>
			<input type="tel" id="contact-phone" name="phone" class="form__input" autocomplete="tel">
		</div>
		<div class="form__group">
			<label class="form__label" for="contact-subject">
				<?php esc_html_e( 'Subject', 'stevens-chiro' ); ?> <span class="required">*</span>
			</label>
			<input type="text" id="contact-subject" name="subject" class="form__input" required>
			<div class="form__error" id="contact-subject-error"><?php esc_html_e( 'Please enter a subject.', 'stevens-chiro' ); ?></div>
		</div>
	</div>

	<div class="form__group">
		<label class="form__label" for="contact-message">
			<?php esc_html_e( 'Message', 'stevens-chiro' ); ?> <span class="required">*</span>
		</label>
		<textarea id="contact-message" name="message" class="form__textarea" required></textarea>
		<div class="form__error" id="contact-message-error"><?php esc_html_e( 'Please enter your message.', 'stevens-chiro' ); ?></div>
	</div>

	<!-- Honeypot -->
	<div class="form__honeypot" aria-hidden="true">
		<label for="contact-website">Website</label>
		<input type="text" id="contact-website" name="website" tabindex="-1" autocomplete="off">
	</div>

	<button type="submit" class="btn btn--primary btn--lg">
		<?php esc_html_e( 'Send Message', 'stevens-chiro' ); ?>
	</button>
</form>
