$(document).ready(function() {
  $("#scroll").on("click", function() {
    $('html, body').animate({
          scrollTop: $(".target").offset().top
      }, 600);
  });
});
