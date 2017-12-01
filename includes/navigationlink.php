<?php
  $page = basename($_SERVER['SCRIPT_NAME']);
  $pageName = ucfirst(trim($page, ".php"));
?>

<div class="navlinks">
  <a href="index.php">Home</a> >
  <?php if ($page != "index.php") { print("<a href=" . $page .">". $pageName . "</a> </div>"); }  { echo ''; } ?>
