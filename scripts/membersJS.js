
$(document).ready(function() {

  $('.clickMe').click(function() {

    //get ID of the div that was clicked
    var clickedID = $(this).attr('id');
    clickedID = clickedID.replace('box','');

    var modalID = "#modal-" + clickedID;
    var boxID = "#box" + clickedID;

    var modal = document.querySelector(modalID);
    var span = document.getElementsByClassName("close")[clickedID - 1];

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
