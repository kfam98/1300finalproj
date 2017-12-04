$(document).ready(function() {

  // Validate form on submit
  $("#subscribeForm").on("submit", function() {
    var emailIsValid = $("#mail").prop("validity").valid;
    if(emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      return false;
    }
  });

});
