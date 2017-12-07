$(document).ready(function () {

  // 2: ask for email

  $("#submit").submit(function(evt) {
      evt.preventDefault();
      var sidebarEmailIsValid = $("#sidebarEmail").prop("validity").valid;
      if(sidebarEmailIsValid) {
        $("#sidebarEmailError").hide();
      } else {
        $("#sidebarEmailError").show();
        formValid = false;
      }

      if (formValid) {
        $("#formDiv").hide();
        $("#response").show();
      }

      return false;

  });


});
