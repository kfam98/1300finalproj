<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shadows Dance Troupe</title>
  <link rel="stylesheet" type="text/css" href="styles/base.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/members.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/showMenu.js"></script>
  <script type="text/javascript" src="scripts/membersJS.js"></script>
</head>

<body>


    <!-- Sidebar Implemented Starts Here -->
    <?php include "includes/sidebar.php"; ?>


    <!-- Main Content Implementation Starts Here -->
    <div class="main">

      <!-- this is the menu pic used for mobile view, pls leave alone  -->
      <?php include "includes/menubar.php"; ?>

      <!-- this is the banner/slideshow for the landing page before scrolling -->
      <div class="banner">
        <div class="banner-text">
          <h1>Members</h1>
          <img id="scroll" alt="scroll" src="images/icons/arrow_white.png">
        </div>
      </div>

      <div class="aboveGrid"> <p>words and i am not sure what to put here naybe bios ooo fancy</p></div>

      <div class="container" id="container">

        <!-- PHP generates interactive member grid -->
        <?php include "includes/gridBoxInfo.php"; ?>

      </div>

      <!-- PHP generates the modal for each member grid -->
      <?php include "includes/modalInfo.php"; ?>


    </div>

</body>
</html>
