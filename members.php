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
  <script type="text/javascript" src="scripts/showModal.js"></script>

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
        <div class="banner-text">
          <h1>Members</h1>
          <!-- <p>And I'm a Photographer</p> -->
          <a id="button" href="#container">Get to Know Them</a>
        </div>
      </div>

      <div class="container" id="container">



        <!-- row 1 -->
        <div class="row">
          <div class="col-1" id="box1">
            <div class="box-text">
              <button class="btn" name="btn1" id="btn1"><h2>Katie O'Brien</h2></button>
              <p>President</p>
            </div>
          </div>
          <div class="col-2" id="box2">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Brendan Kirsh</h2></button>
              <p>Treasurer</p>
            </div>
          </div>
          <div class="col-3" id="box3">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Claudia Nielsen</h2></button>
              <p>Public Relations</p>
            </div>
          </div>
        </div>



        <!-- row 2 -->
        <div class="row">
          <div class="col-1" id="box4">
            <div class="box-text" >
              <button class="btn" id="myBtn"><h2>Ariana Korman</h2></button>
              <p>Social</p>
            </div>
          </div>
          <div class="col-2" id="box5">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Cameron Swift</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-3" id="box6">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Catherine Tran</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
        </div>

        <!-- row 3 -->
        <div class="row">
          <div class="col-1" id="box7">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Catie Wise</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-2" id="box8">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Dana Thornlow</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-3" id="box9">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Erica Holt</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
        </div>

        <!-- row 4-->
        <div class="row">
          <div class="col-1" id="box10">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Jacqueline Glyman</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-2" id="box11">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Jasmine Peng</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-3" id="box12">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Jaye Ren</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
        </div>

        <!-- row 5 -->
        <div class="row">
          <div class="col-1" id="box13">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Julia Albanese</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-2" id="box14">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Julia Walsh</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-3" id="box15">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Kiara Olmeda</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
        </div>

        <!-- row 6 -->
        <div class="row">
          <div class="col-1" id="box16">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Lucy Raymond</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-2" id="box17">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Maya Coben</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-3" id="box18">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Niara Hardister</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
        </div>

        <!-- row 7 -->
        <div class="row">
          <div class="col-1" id="box19">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Samantha Lee</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-2" id="box20">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Shannon Su</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
          <div class="col-3" id="box21">
            <div class="box-text">
              <button class="btn" id="myBtn"><h2>Virginia Boldt</h2></button>
              <p>shadows nickname</p>
            </div>
          </div>
        </div>


      </div>

    <div id="modal-id" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <img alt="modalpic" src="images/members/katie1.jpg">
          <div class="modal-content-text">
            <h1>Name</h1>
            <h2>Title</h2>
            <h2>Class</h2>
            <p>Some text in the Modal..</p>
          </div>
        </div>
      </div>

    </div>

    </div>


  </div>


</body>
</html>
