jQuery(document).ready(function($) {
  /**
   * Script finds each blog social icon and appends required attributes to use tooltip function from bootstrap 4
   */

  const currentLanguage = document.documentElement.lang;

  const tooltipTexts = {};

  if (currentLanguage === "de-DE") {
    // tooltipTexts.facebook = "Bite auf Facebook teilen";
    // tooltipTexts.twitter = "Bitte auf Twitter teilen";
    // tooltipTexts.email = "Bitte über E-Mail teilen";
    tooltipTexts.facebook = "Wir freuen uns über ein Facebook-Share";
    tooltipTexts.twitter = "Wir freuen uns über ein Twitter-Share";
    tooltipTexts.email = "Wir freuen uns über ein Share per Mail";
  } else {
    tooltipTexts.facebook = "Please share to Facebook";
    tooltipTexts.twitter = "Please share to Twitter";
    tooltipTexts.email = "Please share via email";
  }

  setTimeout(function() {
    const fbTooltip = $(".a2a_s_facebook");
    if (fbTooltip) {
      fbTooltip.attr("data-toggle", "tooltip");
      fbTooltip.attr("data-offset", "top: 1px");
      fbTooltip.attr("title", tooltipTexts.facebook);
      fbTooltip.tooltip();
    }
    const twitterTooltip = $(".a2a_s_twitter");
    if (twitterTooltip) {
      twitterTooltip.attr("data-toggle", "tooltip");
      twitterTooltip.attr("data-offset", "top: 1px");
      twitterTooltip.attr("title", tooltipTexts.twitter);
      twitterTooltip.tooltip();
    }
    const emailTooltip = $(".a2a_s_email");
    if (emailTooltip) {
      emailTooltip.attr("data-toggle", "tooltip");
      emailTooltip.attr("data-offset", "top: 1px");
      emailTooltip.attr("title", tooltipTexts.email);
      emailTooltip.tooltip();
    }
  }, 1000);
});
