document.addEventListener('DOMContentLoaded', function() {
  // Clear validation error on any input/change
  document.querySelectorAll('#gform_wrapper_1 input, #gform_wrapper_1 textarea, #gform_wrapper_1 select').forEach(function(field) {
    field.addEventListener('input', function() {
      var fieldContainer = this.closest('.gfield');
      if (fieldContainer && fieldContainer.classList.contains('gfield_error')) {
        fieldContainer.classList.remove('gfield_error');
        // Remove the validation message
        var msg = fieldContainer.querySelector('.validation_message, .gfield_validation_message');
        if (msg) msg.remove();
        // Reset input border
        this.style.borderColor = '';
        this.style.boxShadow = '';
      }
    });
  });

  // Also clear the top submission error when user starts typing anywhere
  document.querySelectorAll('#gform_wrapper_1 input, #gform_wrapper_1 textarea, #gform_wrapper_1 select').forEach(function(field) {
    field.addEventListener('input', function() {
      var subError = document.querySelector('#gform_wrapper_1 .gform_submission_error');
      if (subError) subError.remove();
    });
  });
});