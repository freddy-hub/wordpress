import { ready } from "./utilities";

function handleAdsBehavior() {
  //BOTTOM STICKY AD DESKTOP
  const bottomStickyAdDesktop = document.querySelector(
    ".blog-ad-sticky-bottom--desktop"
  );
  if (bottomStickyAdDesktop) {
    let hasFiredOnce = false;

    window.onscroll = function() {
      const bodyHeight = document.body.scrollHeight;
      const scrollTopTarget = bodyHeight * 0.12;
      const documentScrollTop =
        document.body.scrollTop || document.documentElement.scrollTop;

      if (documentScrollTop > scrollTopTarget && !hasFiredOnce) {
        bottomStickyAdDesktop.classList.add("blog-ad-sticky-bottom--opened");
        hasFiredOnce = true;
      }
    };

    const bottomStickyAdDesktopCloser = bottomStickyAdDesktop.querySelector(
      ".blog-ad-sticky-bottom__close-button"
    );
    bottomStickyAdDesktopCloser.addEventListener("click", function() {
      bottomStickyAdDesktop.classList.remove("blog-ad-sticky-bottom--opened");
    });
  }

  //BOTTOM STICKY AD MOBILE
  const bottomStickyAdMobile = document.querySelectorAll(
    ".blog-ad-sticky-bottom--mobile"
  );
  if (bottomStickyAdMobile) {
    // const bottomStickyAdMobileCloser = document.querySelectorAll(
    //   ".blog-ad-sticky-bottom--mobile .blog-ad-sticky-bottom__close-button"
    // );

    // [...bottomStickyAdMobileCloser].forEach($closer =>
    //   $closer.addEventListener("click", hideMobileAds)
    // );

    // function hideMobileAds() {
    //   [...bottomStickyAdMobile].forEach($ad => {
    //     $ad.classList.add("blog-ad-sticky-bottom--mobile-closed");
    //   });
    // }

    const bottomStickyAdMobile = $(
      ".blog-ad-sticky-bottom--mobile .blog-ad-sticky-bottom__close-button"
    ).click(function() {
      $(".blog-ad-sticky-bottom--mobile").addClass(
        "blog-ad-sticky-bottom--mobile-closed"
      );
    });
  }
  //MODAL AD
  //jQuery here to add event listeners and fades easily
  const modalAd = $(".blog-ad-modal");
  if (modalAd) {
    setTimeout(function() {
      modalAd.fadeIn();
    }, 3000);
    $(".blog-ad-modal__close").click(function() {
      modalAd.fadeOut();
    });
  }

  //SLIDEIN AD
  const slideinAd = document.querySelector(".blog-ad-slidein");
  if (slideinAd) {
    let hasFiredOnce = false;

    window.onscroll = function() {
      const bodyHeight = document.body.scrollHeight;
      const scrollTopTarget = bodyHeight * 0.12;
      const documentScrollTop =
        document.body.scrollTop || document.documentElement.scrollTop;

      if (documentScrollTop > scrollTopTarget && !hasFiredOnce) {
        slideinAd.classList.add("blog-ad-slidein--opened");
        hasFiredOnce = true;
      }
    };
    const slideinAdCloser = slideinAd.querySelector(".blog-ad-slidein__closer");
    slideinAdCloser.addEventListener("click", function() {
      slideinAd.classList.remove("blog-ad-slidein--opened");
    });
  }
}

ready(handleAdsBehavior);
