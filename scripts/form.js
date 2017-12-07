$(document).ready(function() {
  // Validate form on submit
  $("#sidebarEmailError").addClass("hiddenError");
  $("#emailForm").on("submit", function() {
    var emailIsEmpty = true;
    var emailIsValid = $("#sidebarEmail").prop("validity").valid;
    if ($("#sidebarEmail")=="") {
      emailIsEmpty = true;
    } else {
      emailIsEmpty = false;
    }
    if ((emailIsValid) && (!emailIsEmpty)) {
      $("#sidebarEmailError").addClass("hiddenError");
      $("#formDiv").hide();

      var email = $( "#sidebarEmail" ).val();
      $("#responseptag").text("Email recieved. Thank you, " + email + "! ");
      $("#response").show();

    } else {
      $("#sidebarEmailError").removeClass("hiddenError");


    }

    //if user ever wished to store value for use
    $.ajax({
        url:'/Car/Edit/17/',
        type:'post',
        data:$('#emailForm').serialize(),
        success:function(){

        }
    });

    return false;


  });


});
