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

  $colNum = 1;

  for($x = 0; $x < count($membersArray); $x++) {

    $modalID = $x + 1;
    $name = $membersArray[$x][0];
    $title = $membersArray[$x][2];
    $imgSrc = $membersArray[$x][3];

    if ($colNum == 1) {
      print("<div class='row'>");
    }

    print("");
    print(" <div class='box col-".$colNum."  clickMe' id='box".$modalID."'>
      <img class='mem-img' id='mem-img".$modalID."' src='images/members/".$imgSrc."' alt='mem-img'>
      <div class='name-overlay'>
        <span class='name' id='name1'>$name</span>
      </div>
      <div class='box-text'>
        <p>$title</p>
      </div>
    </div>");

    if ($colNum == 3) {
      $colNum = 1;
      print("</div>");

    } else {
      $colNum++;
    }
  }

?>
