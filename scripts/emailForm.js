$(document).ready(function() {

  console.log("ithinkitsgonnashowup");

  $('.clickForm').click(function(){

    console.log("PRINT");

    //get ID of the div that was clicked
    var clickedID = $(this).attr('id');


    var modalID = "#modal-form";

    var modal = document.querySelector(modalID);
    var span = document.getElementsByClassName("closeForm")[0];

    //shows modal of the member that was clicked on
    modal.className = "modal modalClicked";

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.className = "modal";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.className= "modal";
        }
    }

  });

});
