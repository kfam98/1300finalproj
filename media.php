<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shadows Dance Troupe</title>
  <link rel="stylesheet" type="text/css" href="styles/base.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/media.css" media="all"/>

  <!-- google fonts -->
  <?php include "includes/googleFonts.php"; ?>

  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/showMenu.js"></script>
  <script type="text/javascript" src="scripts/emailForm.js"></script>
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
  

    <div class="Rectangle-11">
      <h1 class="central">MEDIA</h1>
      <img id="scroll" alt="scroll" src="images/icons/arrow_white.png">
    </div>

    <div class="slideshow-container">
      <div class="target">
        <div class="mySlides fade">
          <div class="numbertext">1 / 8</div>
          <img src="images/media/Group1.jpg" alt="Group1" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 8</div>
          <img src="images/media/Group2.jpg" alt="Group2" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 8</div>
          <img src="images/media/Group3.jpg" alt="Group3" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 8</div>
          <img src="images/media/Group4.jpg" alt="Group4" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">5 / 8</div>
          <img src="images/media/Group5.jpg" alt="Group5" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">6 / 8</div>
          <img src="images/media/Group6.jpg" alt="Group6" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">7 / 8</div>
          <img src="images/media/Group7.jpg" alt="Group7" style="width:100%">
        </div>

        <div class="mySlides fade">
          <div class="numbertext">8 / 8</div>
          <img src="images/media/Group8.jpg" alt="Group8" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

    </div>



  </div>
  <script type="text/javascript" src="scripts/slideshow.js"></script>
  <script type="text/javascript" src="scripts/dot.js"></script>
</body>

</html>
