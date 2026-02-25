<?php
/**
 * Appointment Request Form
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;
?>

<form class="form" id="appointment-form" data-form-type="appointment" novalidate>
	<div class="form__message" id="appointment-form-message" role="alert"></div>

	<div class="form__row">
		<div class="form__group">
			<label class="form__label" for="appt-name">
				<?php esc_html_e( 'Full Name', 'stevens-chiro' ); ?> <span class="required">*</span>
			</label>
			<input type="text" id="appt-name" name="name" class="form__input" required autocomplete="name">
			<div class="form__error" id="appt-name-error"><?php esc_html_e( 'Please enter your name.', 'stevens-chiro' ); ?></div>
		</div>
		<div class="form__group">
			<label class="form__label" for="appt-email">
				<?php esc_html_e( 'Email Address', 'stevens-chiro' ); ?> <span class="required">*</span>
			</label>
			<input type="email" id="appt-email" name="email" class="form__input" required autocomplete="email">
			<div class="form__error" id="appt-email-error"><?php esc_html_e( 'Please enter a valid email address.', 'stevens-chiro' ); ?></div>
		</div>
	</div>

	<div class="form__row">
		<div class="form__group">
			<label class="form__label" for="appt-phone">
				<?php esc_html_e( 'Phone Number', 'stevens-chiro' ); ?> <span class="required">*</span>
			</label>
			<input type="tel" id="appt-phone" name="phone" class="form__input" required autocomplete="tel">
			<div class="form__error" id="appt-phone-error"><?php esc_html_e( 'Please enter your phone number.', 'stevens-chiro' ); ?></div>
		</div>
		<div class="form__group">
			<label class="form__label" for="appt-date">
				<?php esc_html_e( 'Preferred Date', 'stevens-chiro' ); ?> <span class="required">*</span>
			</label>
			<input type="date" id="appt-date" name="preferred_date" class="form__input" required min="<?php echo esc_attr( date( 'Y-m-d' ) ); ?>">
			<div class="form__error" id="appt-date-error"><?php esc_html_e( 'Please select a preferred date.', 'stevens-chiro' ); ?></div>
		</div>
	</div>

	<div class="form__row">
		<div class="form__group">
			<label class="form__label" for="appt-time">
				<?php esc_html_e( 'Preferred Time', 'stevens-chiro' ); ?>
			</label>
			<select id="appt-time" name="preferred_time" class="form__select">
				<option value=""><?php esc_html_e( 'Select a time...', 'stevens-chiro' ); ?></option>
				<option value="Morning (9-11 AM)"><?php esc_html_e( 'Morning (9-11 AM)', 'stevens-chiro' ); ?></option>
				<option value="Midday (11 AM-1 PM)"><?php esc_html_e( 'Midday (11 AM-1 PM)', 'stevens-chiro' ); ?></option>
				<option value="Afternoon (1-3 PM)"><?php esc_html_e( 'Afternoon (1-3 PM)', 'stevens-chiro' ); ?></option>
				<option value="Late Afternoon (3-5 PM)"><?php esc_html_e( 'Late Afternoon (3-5 PM)', 'stevens-chiro' ); ?></option>
			</select>
		</div>
		<div class="form__group">
			<label class="form__label"><?php esc_html_e( 'Patient Status', 'stevens-chiro' ); ?></label>
			<div class="form__radio-group">
				<label class="form__radio-label">
					<input type="radio" name="patient_status" value="new" checked>
					<?php esc_html_e( 'New Patient', 'stevens-chiro' ); ?>
				</label>
				<label class="form__radio-label">
					<input type="radio" name="patient_status" value="existing">
					<?php esc_html_e( 'Existing Patient', 'stevens-chiro' ); ?>
				</label>
			</div>
		</div>
	</div>

	<div class="form__group">
		<label class="form__label" for="appt-reason">
			<?php esc_html_e( 'Reason for Visit', 'stevens-chiro' ); ?>
		</label>
		<textarea id="appt-reason" name="reason" class="form__textarea" rows="4" placeholder="<?php esc_attr_e( 'Please briefly describe the reason for your visit or any symptoms you\'re experiencing.', 'stevens-chiro' ); ?>"></textarea>
	</div>

	<!-- Honeypot -->
	<div class="form__honeypot" aria-hidden="true">
		<label for="appt-website">Website</label>
		<input type="text" id="appt-website" name="website" tabindex="-1" autocomplete="off">
	</div>

	<button type="submit" class="btn btn--primary btn--lg">
		<?php esc_html_e( 'Request Appointment', 'stevens-chiro' ); ?>
	</button>
</form>
