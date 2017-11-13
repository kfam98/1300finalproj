<?php
  $txtFile = fopen("members.txt", "r") or die("Unable to open file!");

  $name;
  $position;
  $class;
  $explanation;

  $membersArray = array();

  while(!feof($txtFile)) {
    $member = fgets($txtFile);
    var_dump($member);
    $memberArray = explode(",", $member);

    array_push($membersArray, $memberArray);
  }
  echo("array bishes");
  var_dump($membersArray);
  // if button is clicked
  // then print modal div of specific member

  fclose($txtFile);

?>
