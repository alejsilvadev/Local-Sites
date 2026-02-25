/**
 * AJAX Form Submission with Client-Side Validation
 *
 * @package Stevens_Chiro
 */
(function () {
	'use strict';

	// Tab switching.
	document.querySelectorAll('.tabs__btn').forEach(function (btn) {
		btn.addEventListener('click', function () {
			var tabId = this.getAttribute('data-tab');
			var parent = this.closest('.tabs');

			parent.querySelectorAll('.tabs__btn').forEach(function (b) {
				b.classList.remove('is-active');
				b.setAttribute('aria-selected', 'false');
			});
			parent.querySelectorAll('.tabs__panel').forEach(function (p) {
				p.classList.remove('is-active');
			});

			this.classList.add('is-active');
			this.setAttribute('aria-selected', 'true');
			var panel = document.getElementById('tab-' + tabId);
			if (panel) panel.classList.add('is-active');
		});
	});

	// Form handling.
	var forms = document.querySelectorAll('[data-form-type]');

	forms.forEach(function (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();

			// Clear previous errors.
			clearErrors(form);

			// Validate.
			if (!validateForm(form)) {
				return;
			}

			var formType = form.getAttribute('data-form-type');
			var action = 'stevens_' + formType + '_form';
			var submitBtn = form.querySelector('button[type="submit"]');
			var messageEl = form.querySelector('.form__message');

			// Show loading state.
			submitBtn.classList.add('btn--loading');
			submitBtn.disabled = true;

			// Collect form data.
			var formData = new FormData(form);
			formData.append('action', action);
			formData.append('nonce', stevensAjax.nonce);

			// Send AJAX request.
			fetch(stevensAjax.url, {
				method: 'POST',
				body: formData,
				credentials: 'same-origin',
			})
				.then(function (response) {
					return response.json();
				})
				.then(function (data) {
					submitBtn.classList.remove('btn--loading');
					submitBtn.disabled = false;

					if (data.success) {
						showMessage(messageEl, data.data.message, 'success');
						form.reset();
					} else {
						showMessage(messageEl, data.data.message, 'error');
					}
				})
				.catch(function () {
					submitBtn.classList.remove('btn--loading');
					submitBtn.disabled = false;
					showMessage(
						messageEl,
						'An unexpected error occurred. Please try again.',
						'error'
					);
				});
		});
	});

	function validateForm(form) {
		var valid = true;
		var required = form.querySelectorAll('[required]');

		required.forEach(function (field) {
			var value = field.value.trim();

			if (!value) {
				showFieldError(field);
				valid = false;
				return;
			}

			if (field.type === 'email' && !isValidEmail(value)) {
				showFieldError(field);
				valid = false;
			}
		});

		// Focus first error field.
		if (!valid) {
			var firstError = form.querySelector('.is-error');
			if (firstError) firstError.focus();
		}

		return valid;
	}

	function showFieldError(field) {
		field.classList.add('is-error');
		var errorEl = field.parentElement.querySelector('.form__error');
		if (errorEl) errorEl.classList.add('is-visible');
	}

	function clearErrors(form) {
		form.querySelectorAll('.is-error').forEach(function (el) {
			el.classList.remove('is-error');
		});
		form.querySelectorAll('.form__error').forEach(function (el) {
			el.classList.remove('is-visible');
		});
		var msg = form.querySelector('.form__message');
		if (msg) {
			msg.classList.remove('is-visible');
			msg.classList.remove('form__message--success');
			msg.classList.remove('form__message--error');
		}
	}

	function showMessage(el, message, type) {
		if (!el) return;
		el.textContent = message;
		el.className = 'form__message is-visible form__message--' + type;
		el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
	}

	function isValidEmail(email) {
		return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
	}

	// Clear field errors on input.
	document.querySelectorAll('.form__input, .form__textarea, .form__select').forEach(function (field) {
		field.addEventListener('input', function () {
			this.classList.remove('is-error');
			var errorEl = this.parentElement.querySelector('.form__error');
			if (errorEl) errorEl.classList.remove('is-visible');
		});
	});
})();
