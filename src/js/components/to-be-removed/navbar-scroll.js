jQuery(document).ready(function($) {
  var fixedNavGeneral = $(".zenkit-navbar");
  var fixedNavBlog = $(".navbar-scrolling");
  var lastScrollTop = 0;
  var scrollTop;
  $(window).scroll(function() {
    if (fixedNavBlog) {
      var currentScrollTop = $(window).scrollTop();

      var navbarScrollDesktop = $(".navbar-scrolling .navbar-scroll-desktop");

      if (
        lastScrollTop > currentScrollTop &&
        window.innerWidth > 768 &&
        !navbarScrollDesktop.hasClass("active-scroll")
      ) {
        navbarScrollDesktop.addClass("active-scroll");
        navbarScrollDesktop.stop().slideDown(300, function() {
          navbarScrollDesktop.removeClass("active-scroll");
        });
      } else if (
        lastScrollTop < currentScrollTop &&
        window.innerWidth > 768 &&
        !navbarScrollDesktop.hasClass("active-scroll")
      ) {
        navbarScrollDesktop.addClass("active-scroll");
        navbarScrollDesktop.stop().slideUp(300, function() {
          navbarScrollDesktop.removeClass("active-scroll");
        });
      }
      if (currentScrollTop > 180) {
        fixedNavBlog.addClass("scrolled-fixed-top");
      } else {
        fixedNavBlog.removeClass("scrolled-fixed-top");
      }

      lastScrollTop = currentScrollTop;
    }

    if (fixedNavGeneral) {
      scrollTop = $(window).scrollTop();

      if (scrollTop > 10) {
        fixedNavGeneral.addClass("navbar-scrolled");
      } else {
        fixedNavGeneral.removeClass("navbar-scrolled");
      }
    }
  });
});
