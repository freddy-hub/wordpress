// Cookie Hinweis
$(document).ready(function($) {
    var cookieAlert = $('.cookie-alert');
    if (document.cookie.indexOf("cookie-hide=1") != -1) {
        cookieAlert.hide();
    } else {
        cookieAlert
            .prependTo("body")
            .slideToggle();
    }
});
