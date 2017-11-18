<?php
  $txtFile = fopen("txt/members.txt", "r") or die("Unable to open file!");

  $name;
  $position;
  $class;
  $explanation;

  $membersArray = array();

  while(!feof($txtFile)) {
    $member = fgets($txtFile);

    $memberArray = explode(",", $member);

    array_push($membersArray, $memberArray);
  }

  for($x = 0; $x < count($membersArray); $x++) {

    $modalID = $x + 1;
    $name = $membersArray[$x][0];
    $class = $membersArray[$x][1];
    $title = $membersArray[$x][2];
    $imgSrc = $membersArray[$x][3];
    $description = $membersArray[$x][4];

    print("");
    print("<div id=modal-".$modalID." class='modal'>

      <!-- Modal content -->
      <div class='modal-content'>
        <span class='close'>&times;</span>
        <img alt='modalpic' src='images/members/".$imgSrc."'>
        <div class='modal-content-text'>
          <h1>".$name."</h1>
          <h2>".$title."</h2>
          <h2>Class of ".$class."</h2>
          <p>".$description."</p>
        </div>
      </div>
    </div>");
  }


  fclose($txtFile);

?>
