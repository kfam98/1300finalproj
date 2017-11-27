$(document).ready(function() {
  $("#scroll").on("click", function() {
    $('html, body').animate({
      scrollTop: $(".container").offset().top
      }, 500);
  });
});
