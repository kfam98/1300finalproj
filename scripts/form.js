$(document).ready(function() {

  // Validate form on submit
  $("#subscribeForm").on("submit", function() {
    var emailIsValid = $("#sidebarEmail").prop("validity").valid;
    if (emailIsValid) {
      $("#sidebarEmailError").hide();
    } else {
      $("#sidebarEmailError").show();
      return false;
    }
  });
});
