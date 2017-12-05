$(document).ready(function() {
  // Validate form on submit
  $("#emailForm").on("submit", function() {
    var emailIsValid = $("#sidebarEmail").prop("validity").valid;
    if ($("#sidebarEmail")=="") {
      var emailIsEmpty = true;
    } else {
      var emailIsEmpty = false;
    }
    if ((emailIsValid) && (!emailIsEmpty)) {
      $("#sidebarEmailError").hide();
    } else {
      $("#sidebarEmailError").show();
      return false;
    }
  });
console.log(emailIsValid);
console.log(emailIsEmpty);
});
