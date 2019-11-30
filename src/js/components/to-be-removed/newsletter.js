import "./jquery.validate.js";

/*
    From: http://stackoverflow.com/questions/18754020/bootstrap-3-with-jquery-validation-plugin
    Override default functions of the validation plugin to use bootstrap classes for error highlighting
 */
$.validator.setDefaults({
  highlight: function(element) {
    $(element)
      .closest(".form-group")
      .addClass("has-error");
  },
  unhighlight: function(element) {
    $(element)
      .closest(".form-group")
      .removeClass("has-error");
  },
  errorElement: "span",
  errorClass: "help-block",
  errorPlacement: function(error, element) {
    if (element.parent(".input-group").length) {
      error.insertAfter(element.parent());
    } else {
      error.insertAfter(element);
    }
  }
});

function noop() {
  return;
}

function validateNewsletterForm($form, handlers) {
  var hide = handlers.hide || noop;
  var pending = handlers.pending || noop;
  var error = handlers.error || noop;
  var warning = handlers.warning || noop;
  var success = handlers.success || noop;

  $form.validate({
    submitHandler: function(form) {
      hide();
      pending();

      var $firstnameInput = $(form[0]);
      var $lastnameInput = $(form[1]);
      var $emailInput = $(form[2]);
      var $captchaResponse = $(form[3]);

      var captchaToken = $captchaResponse.val();

      if (captchaToken == null || captchaToken === "") {
        hide();
        return error();
      }

      $.post({
        url:
          window.location.protocol +
          "//" +
          window.location.host +
          "/api/internal/newsletter/subscribe",
        data: {
          firstname: $firstnameInput.val(),
          lastname: $lastnameInput.val(),
          email: $emailInput.val(),
          recaptchaToken: $captchaResponse.val()
        },
        success: function() {
          hide();
          success();
        },
        error: function(xhr) {
          hide();

          var error = xhr.responseJSON;
          if (error && error.error) {
            warning(error.error.description);
          } else {
            error();
          }
        }
      });
    }
  });
}

$(function() {
  var $newsletterForm = $("#newsletterSubscriptionForm");
  var $newsletterFormBlog = $("#newsletterSubscriptionFormBlog");

  if (newsletterForm.length > 0 || $newsletterFormBlog.length > 0) {
    if (window.grecaptcha) {
      var grecaptcha = window.grecaptcha;

      grecaptcha.ready(function() {
        grecaptcha
          .execute("6LfggY4UAAAAAAAJ4reWOqxyuYvcibDQ25TK9r5z", {
            action: "newsletterform"
          })
          .then(function(token) {
            document.getElementById("recaptchaResponse").value = token;
          });
      });
    }
  }

  if ($newsletterForm.length > 0) {
    var $alert = $(".newsletter-alert");

    validateNewsletterForm($newsletterForm, {
      hide: function() {
        $alert.hide();
      },
      success: function() {
        $alert.filter(".newsletter-success").show();
      },
      warning: function(message) {
        var alert = $alert.filter(".alert-warning");
        if (message) {
          alert.text(message);
        }
        alert.show();
      },
      error: function(message) {
        var alert = $alert.filter(".alert-danger");
        if (message) {
          alert.text(message);
        }
        alert.show();
      },
      pending: function() {
        $alert.filter(".newsletter-pending").show();
      }
    });
  }

  if ($newsletterFormBlog.length) {
    var $alert = $(".newsletter-alert");

    validateNewsletterForm($newsletterFormBlog, {
      hide: function() {
        $alert.hide();
        $newsletterFormBlog.show();
      },
      success: function() {
        $newsletterFormBlog.hide();
        $alert.filter(".alert-success").show();
      },
      warning: function() {
        $newsletterFormBlog.hide();
        $alert.filter(".alert-danger").show();
      },
      error: function() {
        $newsletterFormBlog.hide();
        $alert.filter(".alert-danger").show();
      }
    });
  }
});
