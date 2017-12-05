<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shadows Dance Troupe</title>

  <link rel="stylesheet" type="text/css" href="styles/base.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/index.css" media="all"/>

  <!-- google fonts -->
  <?php include "includes/googleFonts.php"; ?>

  <!-- javascript -->
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/showMenu.js"></script>
  <script type="text/javascript" src="scripts/scroll.js"></script>
  <!-- <script type="text/javascript" src="scripts/form.js"></script> -->

</head>

<body>

  <div class="content">

    <!-- Sidebar Implemented Starts Here -->
    <?php include "includes/sidebar.php"; ?>

    <!-- Main Content Implementation Starts Here -->
    <div class="main">
      <!-- this is the menu pic used for mobile view, pls leave alone  -->
      <?php include "includes/menubar.php"; ?>
      <!-- this is the banner/slideshow for the landing page before scrolling -->

      <div id="indexCover">
        <h1 id="indexCoverFirst"> SHADOWS </h1>
        <h2 id="indexCoverSecond"> Dance Troupe </h2>
        <div id="indexScroll">
          <a href="index.php#target">
            <img id="scroll" alt="scroll" src="images/icons/arrow_white.png">
          </a>
        </div>
      </div>


      <!-- text details below -->
      <div class="indexInfo">

        <h1> <a class="target"> About </a> </h1>
        <h2> Mission </h2>
        <p>
          Shadows Dance Troupe exists to provide Cornell students with the opportunity to dance and perform, with qualifications including experience, merit, enthusiasm, effort, and personal commitment. Shadows holds auditions twice a year: at the beginning of the fall semester and at the beginning of the spring semester. We are always looking for strong, talented dancers. If you are interested in auditioning, please look out for information on this page or contact one of our co-chairs!
        </p>
        <h2> Who are we? </h2>
        <p>
          Shadows Dance Troupe was founded in 1993 at Cornell University. A group of energetic and versatile dancers, Troupe members come from all different dance backgrounds. Shadows routines are innovative and represent the different strengths of group members. Whether it be jazz, tap, lyrical, modern or hip hop, every Shadow absolutely loves to practice and perform. During two shows a year, Fall Step and Spring Heat, as well as during a variety of guest performances throughout the year, Shadow's wows its audience!
        </p>
        <h2> Meetings </h2>
        <p>
          We meet three times a week in WSH and Helen Newman, depending on availability of rehearsal space.
        </p>
      </div>

      <!-- possible parallax implementation -->
      <div class="parallax">
        <!-- image placed as background in css -->
      </div>

      <!-- second information section -->
      <div class="indexInfo">
        <h1> Upcoming Events </h1>

        <img id="fallStepImg" alt="fallstep" src="images/join/fallstep.jpg"/>

        <p>
          Join Shadows Dance Troupe at Fall Step 2017: Cornell's Largest Dance Collective! This dynamic show features dance tropues from across campus in a wide range of styles, from contemporary to hip hop to cultural performances. A one-of-a kind opportunity to see the diverse dance talent at Cornell, all in Bailey Hall on one epic night.
        </p>
        <div id="fallStep">
          <h2>When?</h2>
          <p>Friday, December 1 at 8PM - 10PM</p>
          <h2>Where?</h2>
          <p>Bailey Hall</p>
          <h2>Ticket Information</h2>
          <p> Get your ticket at
            <a href="https://baileytickets.universitytickets.com/w/event.aspx?id=1293&cid=160&p=1">
              Bailey Ticket
            </a>
            for $8!
          </p>
        </div>
      </div>

    </div>

  </div>
</body>
</html>
