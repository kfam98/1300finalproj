$(document).ready(function() {

  // Validate form on submit
  $("#emailForm").on("submit", function() {
    var emailIsValid = $("#sidebarEmail").prop("validity").valid;
    var emailIsEmpty = if $("#sidebarEmail"); 
    if ((emailIsValid) && emailIsEmpty) {
      $("#sidebarEmailError").hide();
    } else {
      $("#sidebarEmailError").show();
      return false;
    }
  });
});
