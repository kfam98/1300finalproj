
$(document).ready(function() {
  var modal = document.getElementById('modal-id');

  // Get the button that opens the modal
  var btn1 = document.getElementById("btn1");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  btn1.onclick = function() {
      modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  // scrolls down with pretty animation
  $("#scroll").on("click", function() {
    $('html, body').animate({
          scrollTop: $(".container").offset().top
      }, 500);
  });

});
