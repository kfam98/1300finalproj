<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ithaca Apple Festival</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>

<body>

  <div class='content'>
    <!--top bar w/ navigation-->
    <?php
      include "includes/navigation.php";
    ?>

  <!--Image Source: Facebook Event Banner-->
  <img id='banner' alt="applefest" src="images/applefest.jpg"/>
  <p id="caption"> Image taken from
    <a href='http://www.downtownithaca.com/ithaca-events/35th%20Apple%20Harvest%20Festival%20Presented%20by%20Tompkins'>
      Downtown Ithaca Alliance
    </a>
    - a 501(c)3 organization in Ithaca, NY.
  </p>

  <!--main content of the page -->
  <div class='main'>
    <p id='linknav'><a href='index.php'>Home</a>  >  </p>

      <!--Overview of the times, dates, and locations-->
      <br/>

      <div class="description">
        <h1>What is Ithaca's Apple Festival?</h1>
        <p >Every year, Tompkins Trust Company hosts the annual Apple Harvest Festival!
          The Apple Harvest Festival is welcomes fall in a 3-day celebration in the Ithaca Commons.
          The celebration includes food that incorporates apples in some unique way, has rides, games,
          and more than 100 vendors! Get to know the makers of regional ciders and witness the local
          entertainment and businesses describe their experiences in Ithaca, NY. There will be hot apple cider,
          kettle corn, and fresh baked goods to local pumpkins, hand-woven merchandise, and of course, apples!
          Even if apples aren't your favorite, they will be after you witness the multiple ways apple can
          be incorportated into recipes!</p>
        </div>
        <h1> When is the Apple Festival?</h1>
        <div id="date">

          <h2>September 29, 2017 12pm-6pm</h2>
          <h2>September 30, 2017 10am-6pm</h2>
          <h2>October 1, 2017 10am-6pm</h2>
          <h2>Location: Ithaca Commons, Ithaca NY</h2>
          <br/>
        </div>



      </div>

      <!-- circle images w/ links -->
      <div class ="mainicon">
        <!--Credit to Andrew Halpern for the photos-->
        <div class=mainicons>
          <a href= "location.php"><img alt="iconloc" src="images/locationicon.jpg"></a>
          <h4>Ithaca, NY</h4>
        </div>
        <div class=mainicons>
          <a href = "schedule.php"><img  alt="iconcosts" src="images/costsicon.jpg"></a>
          <h4>Schedule</h4>
        </div>
        <div class=mainicons>
          <a href="about.php"><img alt="iconabout" src="images/scheduleicon.jpg"></a>
          <h4>More About the Festival</h4>
        </div>
        <div class=mainicons>
          <a href="photos.php"><img  alt="iconphoto" src="images/photoicon.jpg"></a>
          <h4>Photo Gallery</h4>
        </div>

      </div>
      <p class="creds">More photos found on <a href='https://www.flickr.com/photos/106103661@N02/albums/72157657274645113'>Andrew Halpern's flikr</a>. <br/></p>


      <!-- social media linked icons -->
      <?php
        include "includes/socialmedia.php";
      ?>
      </div>

      <?php
        include "includes/footer.php";
      ?>


    </body>
</html>
