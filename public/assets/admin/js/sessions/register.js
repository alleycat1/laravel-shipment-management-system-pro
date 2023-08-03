var RegisterForm = (function () {
  // Login form validation
  var handleValidation = function () {
    // for more info visit the official plugin documentation:
    // http://docs.jquery.com/Plugins/Validation
    var form = $('#registerForm')

    form.validate({
      errorElement: 'span', // default input error message container
      errorClass: 'help-block help-block-error', // default input error message class
      focusInvalid: false, // do not focus the last invalid input
      ignore: '',  // validate all fields including form hidden input
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
          minlength: 2,
          required: true
        },
        password_confirmation: {
          equalTo: '#password'
        }
      },
      highlight: function (element) { // hightlight error inputs
        $(element)
        .closest('.form-group .form-control').addClass('is-invalid') // set invalid class to the control group
      },
      unhighlight: function (element) { // revert the change done by hightlight
        $(element)
        .closest('.form-group .form-control').removeClass('is-invalid') // set invalid class to the control group
        .closest('.form-group .form-control').addClass('is-valid') // set valid class to the control group
      },
      success: function (label) {
        label
        .closest('.form-group .form-control').removeClass('is-invalid') // set success class to the control group
      }
    })
  }

  return {
    // main function to initiate the module
    init: function () {
      handleValidation()
    }
  }
})()

jQuery(document).ready(function () {
  RegisterForm.init()
})
