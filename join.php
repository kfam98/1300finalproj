<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shadows Dance Troupe</title>
  <link rel="stylesheet" type="text/css" href="styles/base.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/join.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/showMenu.js"></script>
  <script type="text/javascript" src="scripts/joinJS.js"></script>
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
      <div class="banner">
        <!--Image Source: Shadows dance troupe Facebook page -->
        <div class="banner-text">
          <h1>Join</h1>
        </div>
      </div>

      <!--general info-->
      <div class="shadows">
        <h1>Shadows Dance Troupe?</h1>
          <p>With dedicated members and a true passion for dance, Shadows challenges dancers to improve their skills and breeds innovation. Shadows is a tight-knit group who absolutely loves to perform.</p>
          <p>Check out our YouTube channel! <br/>
          <a href="https://www.youtube.com/user/cornellshadows?feature=watch"> https://www.youtube.com/user/cornellshadows?feature=watch </a></p>

          <!--<h3 id="audjoin"><a href="">Want to join Shadows?</a></h3>-->
          <!--if clicked, scrolls down to audition section-->
      </div>
      <hr/>

      <!--performance info-->
      <div class="performance">
        <h1> Shadows Fall Step 2017 </h1>
        <figure id="fallstepimg">
          <img alt="fallstep" src="images/join/fallstep.jpg"/>
        </figure>
        <div class="fallstepinfo">
          <p>Join Shadows Dance Troupe at Fall Step 2017: Cornell's Largest Dance Collective! This dynamic show features dance tropues from across campus in a wide range of styles, from contemporary to hip hop to
          cultural performances. A one-of-a kind opportunity to see the diverse dance talent at Cornell, all in Bailey Hall on one epic night. </p>
        </div>
        <div class="fallstep_info">
          <h2>When?</h2>
            <p>Friday, December 1 at 8PM - 10PM</p>
          <h2>Where?</h2>
            <p>Bailey Hall</p>
            <!--add google map maybe?-->
          <h2>Ticket Information</h2>
            <p>Get your ticket at <a href="https://baileytickets.universitytickets.com/w/event.aspx?id=1293&cid=160&p=1">Bailey Ticket </a> for $6! </p>
        </div>
      </div>
      <hr/>
      <!--audition info-->
      <div class="audition">
        <h1>Fall 2017 Audition</h1>
          <p> Come try out for Shadows Dance Troupe at our Fall 2017 auditions!
            We perform all styles of dance, including jazz contemporary, hip hop, tap, and more.
            Each year, we are known for hosting Fall Step, Cornell's largest dance collective in Bailey hall!
            Shadows dancers are active in the dance community - teaching CDA workshops, participating in multiple dance troupes, and performing across campus.
            We would love to see what you've got - auditions for Shadows! <p>
          <figure id="auditioninfo">
            <img alt="audition" src="images/join/audition.jpg"/>
          </figure>
        <!--add map-->
      </div>
      <hr/>

      <!--workshop info-->
      <div class="workshop">
        <h1>Orientation Workshop</h1>
          <figure>
            <img alt="workshop" src="images/join/workshop.jpg">
            <img alt="workshop" src="images/join/workshop2.jpg">
          </figure>
        <!--add past workshop pictures + videos -->
      </div>



    </div>



  </div>
</body>
</html>
