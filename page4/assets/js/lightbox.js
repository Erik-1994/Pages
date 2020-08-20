(function ($) {
  /*
   * LIGHTBOX
   */

  var gallery = $(".gallery_wrap"),
    overlay = $("<div/>", {
      id: "overlay"
    });


  overlay.appendTo("body").hide();


  gallery.on("click", "a", function (event) {
    var href = $(this).attr("href"),
      image = $("<img>", {
        src: href,
        alt: "learn2code"
      });


    overlay.html(image).show();

    event.preventDefault();
  });


  overlay.on("click", function () {
    overlay.hide();
  });


  $(document).on("keyup", function (event) {
    if (event.which === 27) overlay.hide();
  });
})(jQuery);