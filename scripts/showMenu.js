$(document).ready(function() {

  $(".menu").click(function(e){

    if  ( $("#sidebar").hasClass('slide-in') )  {
      console.log("pls work");
      $("#sidebar").removeClass( "slide-in" ).addClass( "slide-out" );
      $("#menu_pic").show();
      $(".closebtn").hide();
      $(".banner").removeClass("mainDim");
      // $("body").removeClass("mainDim");




    } else {
      e.stopPropagation();
      console.log("pls work slide in");
      $("#sidebar").removeClass( "slide-out" ).addClass( "slide-in" );
      $("#sidebar").show();
      $("#menu_pic").hide();
      $(".closebtn").show();
      $(".banner").addClass("mainDim");
      // $("body").addClass("mainDim");

    }



  });




});
