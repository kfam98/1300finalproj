$(document).ready(function() {
  $("#arrow").on("click", function() {
    $('html, body').animate({
      scrollTop: $(".join").offset().top
      }, 500);
  });
});
