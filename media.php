<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shadows Dance Troupe</title>
  <link rel="stylesheet" type="text/css" href="styles/base.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/media.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/showMenu.js"></script>
  <script type="text/javascript" src="scripts/scroll.js"></script>
</head>
<body>
  <!-- Sidebar Implemented Starts Here -->
  <?php include "includes/sidebar.php"; ?>

  <!-- Sidebar Implementation Ends Here -->

  <!-- Main Content Implementation Starts Here -->
  <div class="main">
    <!-- this is the menu pic used for mobile view, pls leave alone  -->
    <?php include "includes/menubar.php"; ?>

    <div class=".Rectangle-11">
      <h1 class="central">MEDIA</h1>
      <img id="scroll" alt="scroll" src="images/icons/arrow.png">
    </div>

    <div class="slideshow-container">
      <div class="Media-box">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/Group1.jpg" alt="Group1" style="width:100%">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/Group2.jpg" alt="Group2" style="width:100%">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/Group3.jpg" alt="Group3" style="width:100%">
          <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
      <script type="text/javascript" src="scripts/slideshow.js"></script>
    </div>


  </div>
</body>
</html>
