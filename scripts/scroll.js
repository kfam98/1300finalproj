$(document).ready(function() {
  $("#scroll").on("click", function() {
    $('html, body').animate({
          scrollTop: $(".Media-box").offset().top
      }, 500);
  });
});
