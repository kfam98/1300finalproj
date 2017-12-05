$(document).ready(function () {

  // 2: ask for email
  var sidebarEmailIsValid = $("#sidebarEmail").prop("validity").valid;
  if(sidebarEmailIsValid) {
    $("#sidebarEmailError").hide();
  } else {
    $("#sidebarEmailError").show();
    formValid = false;
  }

  return formValid;

});
