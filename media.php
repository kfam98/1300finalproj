<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shadows Dance Troupe</title>
  <link rel="stylesheet" type="text/css" href="styles/base.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/media.css" media="all"/>
  <script src="scripts/slideshow.js"></script>
</head>

<body>

  <!-- Sidebar Implemented Starts Here -->
  <div class="sidebar">
    <?php include "includes/sidebar.php"; ?>
  </div>
  <!-- Sidebar Implementation Ends Here -->

  <!-- Main Content Implementation Starts Here -->
  <div class="main">
  <div class=".Rectangle-11">
    <h1 class="central">Media</h1>
  </div>
  <div class="Media-box">
    <ul id="select-list">
      <li class="select">Photos</li>
      <li class="select">Videos</li>
    </ul>
    <img class="slides" src="images/Group1.jpg" alt="Group1.jpg"/>
    <img class="slides" src="images/Group2.jpg" alt="Group2.jpg"/>
    <img class="slides" src="images/Group3.jpg" alt="Group3.jpg"/>
    <img class="slides" src="images/Group4.jpg" alt="Group4.jpg"/>
    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    <!--<img class="mySlides" src="img_fjords.jpg">
    <img class="mySlides" src="img_lights.jpg">
    <img class="mySlides" src="img_mountains.jpg">
    <img class="mySlides" src="img_forest.jpg">-->
  </div>
  </div>
</body>
</html>
