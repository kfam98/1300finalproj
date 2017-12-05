<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shadows Dance Troupe</title>
  <link rel="stylesheet" type="text/css" href="styles/base.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/join.css" media="all"/>

  <!-- google fonts -->
  <?php include "includes/googleFonts.php"; ?>

  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/emailForm.js"></script>
  <script type="text/javascript" src="scripts/showMenu.js"></script>
  <script type="text/javascript" src="scripts/scroll.js"></script>
</head>

<body>


    <!-- Sidebar Implemented Starts Here -->
    <?php include "includes/sidebar.php"; ?>


    <!-- Main Content Implementation Starts Here -->
    <div class="main">
      <!-- this is the menu pic used for mobile view, pls leave alone  -->
      <?php include "includes/menubar.php"; ?>


      <div class="cover">
        <!--Image Source: Shadows dance troupe Facebook page -->
        <div class="covertext">
          <h1>Join</h1>
          <img id="scroll" alt="scroll" src="images/icons/arrow_white.png">
        </div>
      </div>


    <div class="target">
      <div class="joinInfo">
      <!--general info-->
        <div class="shadows">
          <h1>Shadows Dance Troupe?</h1>
            <p>With dedicated members and a true passion for dance, Shadows challenges dancers to improve their skills and breeds innovation. Shadows is a tight-knit group who absolutely loves to perform.</p>
            <p> Check out our
              <a href="https://www.youtube.com/user/cornellshadows?feature=watch">
                YouTube Channel</a> for more performances!
            </p>

              <!--<h3 id="audjoin"><a href="">Want to join Shadows?</a></h3>-->
              <!--if clicked, scrolls down to audition section-->
        </div>

      <!--audition info-->
      <div class="audition">
        <h2>Fall 2017 Audition</h2>
        <figure id="auditionimg">
          <img alt="audition" src="images/join/audition.jpg"/>
        </figure>
          <p> Come try out for Shadows Dance Troupe at our Fall 2017 auditions!
            We perform all styles of dance, including <b> jazz contemporary, hip hop, tap, and more.</b>
            Each year, we are known for hosting Fall Step, Cornell's largest dance collective in Bailey hall!
            Shadows dancers are active in the dance community - teaching CDA workshops, participating in multiple dance troupes, and performing across campus.
            We would love to see what you've got - auditions for Shadows! <p>
      </div>

      <!--workshop info-->
      <div class="workshop">
        <h2>Orientation Workshop</h2>
        <p>Check out the full schedule below and see updates at <a href="https://www.facebook.com/events/477823099260022/">Dance O-Week Workshops</a>!</p>
          <figure id="workshopimg">
            <!-- possible parallax implementation -->
            <div class="parallax">
              <!-- image placed as background in css -->
            </div>
          </figure>
          <img alt="workshop" src="images/join/workshop.jpg">
        <!--add past workshop pictures + videos -->
      </div>
    </div>
  </div>
  </div>
</body>
</html>
