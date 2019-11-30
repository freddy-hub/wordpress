$(document).ready(function($) {
  $("#search-zenkit .zi-search").on("click", function(event) {
    event.preventDefault();
    var clickedSearch = $(this)
      .parent()
      .find("#full-screen-search .zk-search-form input");
    if (clickedSearch.hasClass("wide-search")) {
      clickedSearch.removeClass("wide-search");
    } else {
      // Display the Search box

      clickedSearch.addClass("wide-search");

      // Focus on the Search Input Field
      clickedSearch.focus();
    }
  });

  $(".mobile-search-toggle").on("click", function(event) {
    // Prevent the default action
    event.preventDefault();
    // Display the Full Screen Search
    $("#mobile-full-screen-search").addClass("overlay-search");
    $("#mobile-full-screen-search").css("display", "");
    // Focus on the Full Screen Search Input Field
    $("#mobile-full-screen-search input").focus();
  });

  // Hide the Full Screen search when the user clicks the close button
  $("#mobile-full-screen-search button.close").on("click", function(event) {
    // Prevent the default event
    event.preventDefault();
    event.stopPropagation();

    var mobileFullScreenSearch = document.querySelector(
      "#mobile-full-screen-search"
    );
    //Hide the Full Screen Search
    $("#mobile-full-screen-search").fadeOut("slow", function() {
      mobileFullScreenSearch.classList.toggle("overlay-search");
    });
  });

  // Hide the Full Screen search when the user presses the escape key
  $(document).keydown(function(event) {
    // Don't do anything if the Full Screen Search is not displayed
    if (!$("#mobile-full-screen-search").hasClass("overlay-search")) {
      return;
    }

    // Don't do anything if the user did not press the escape key
    if (event.keyCode != 27) {
      return;
    }

    // Prevent the default event
    event.preventDefault();

    // Hide the Full Screen Search
    $("#mobile-full-screen-search").fadeOut("slow", function() {
      $(this).removeClass("overlay-search");
    });
  });
});
