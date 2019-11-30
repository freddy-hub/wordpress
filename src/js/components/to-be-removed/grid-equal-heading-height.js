/**
 * Script to find all headings of each section and apply the same height them for an equal look
 * currently used in the front page template only
 */
$(document).ready(function($) {
  function equalizeGridHeadings() {
    //find all heading containers
    const headingContainers = $(".bordered-grid--js-equal-height-headings");

    if (headingContainers.length) {
      //loop all containers
      headingContainers.each(function(index, headingContainer) {
        //variable to store highest heading height
        let highestHeading = 0;

        //get all headings in this container
        const headings = $(this).find(
          ".bordered-grid__text-heading--js-equal-height-md"
        );

        //loop headings
        headings.each(function(index, heading) {
          //apply auto height so the height returns to normal (in case of the script running multiple times)
          $(this).height("auto");

          //get height
          const headingHeight = $(this).height();

          //store if height is highest so far
          if (headingHeight > highestHeading) {
            highestHeading = headingHeight;
          }
        });

        //if a height was found, apply to all headings
        if (highestHeading != 0) {
          headings.height(highestHeading);
        }
      });
    }
  }

  //run on page load
  equalizeGridHeadings();

  //run on each window resize
  $(window).on("resize", function() {
    equalizeGridHeadings();
  });
});
