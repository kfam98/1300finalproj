$(document).ready(function() {
  var i;
  var slideIndex = 1
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  $('.dot').click(function(n) {
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    slides.className.replace(" active", "")
    if (slideIndex == i) {
    slides.className.replace("", " active")
  }
  });

});
