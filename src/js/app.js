import $ from "jquery";
window.jQuery = $;
window.$ = $;

import "../../sass/style.scss";

$(document).ready(function() {
  var slickPartner = $(".ivd-unsere-partner__slider");
  slickPartner.slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    swipeToSlide: true,
    speed: 300,
    prevArrow:
      '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;"><i class="fa fa-angle-left"></i></button>',
    nextArrow:
      '<button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;"><i class="fa fa-angle-right"></i></button>',
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  var slickReferenzen = $(".ivd-referenzen__slider");
  slickReferenzen.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    swipeToSlide: true,
    speed: 300,
    dots: true,
    prevArrow:
      '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;"><i class="fa fa-angle-left"></i></button>',
    nextArrow:
      '<button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;"><i class="fa fa-angle-right"></i></button>',
    dots: true
  });

  var magazinFilterCheckboxes = $(".ivd-magazin-full__filter input");
  var magazinSections = $(".ivd-magazin");

  magazinFilterCheckboxes.change(function() {
    var magazinSectionsToDisplay = [];
    magazinFilterCheckboxes.each(function(i, checkbox) {
      if ($(checkbox).is(":checked")) {
        magazinSectionsToDisplay.push($(checkbox).attr("id"));
      }
    });

    if (magazinSectionsToDisplay.length < 1) {
      magazinSections.each(function(i, section) {
        $(section).show();
      });
      return;
    }

    magazinSections.each(function(i, section) {
      if (magazinSectionsToDisplay.includes($(section).data("section-id"))) {
        $(section).show();
      } else {
        $(section).hide();
      }
    });
  });
});
