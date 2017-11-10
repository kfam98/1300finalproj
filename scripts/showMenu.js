$(document).ready(function() {

  $("#menu_pic").click(function(e){
    e.stopPropagation();
    $("#sidebar").toggle('bar');
    console.log("pl work");
  });


  $('body').click(function(e) {
  if ($('.menu').hasClass('bar')) {
    $(".menu").toggleClass('bar')
  }

  });

});
