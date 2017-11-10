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
          <img id="scroll" alt="scroll" src="images/icons/arrow.png">
        </div>
      </div>

      <div class="container" id="container">



        <!-- row 1 -->
        <div class="row">
          <div class="col-1" id="box1">
            <div class="box-text">
              <button class="btn" name="btn1" id="btn1">Katie O'Brien</button>
              <p>President</p>
            </div>
          </div>
          <div class="col-2" id="box2">
            <div class="box-text">
              <button class="btn" id="btn2">Brendan Kirsh</button>
              <p>Treasurer</p>
            </div>
          </div>
          <div class="col-3" id="box3">
            <div class="box-text">
              <button class="btn" id="btn3">Claudia Nielsen</button>
              <p>Public Relations</p>
            </div>
          </div>
        </div>



        <!-- row 2 -->
        <div class="row">
          <div class="col-1" id="box4">
            <div class="box-text" >
              <button class="btn" id="btn4">Ariana Korman</button>
              <p>Social</p>
            </div>
          </div>
          <div class="col-2" id="box5">
            <div class="box-text">
              <button class="btn" id="btn5">Cameron Swift</button>
            </div>
          </div>
          <div class="col-3" id="box6">
            <div class="box-text">
              <button class="btn" id="btn6">Catherine Tran</button>
            </div>
          </div>
        </div>

        <!-- row 3 -->
        <div class="row">
          <div class="col-1" id="box7">
            <div class="box-text">
              <button class="btn" id="btn7">Catie Wise</button>
            </div>
          </div>
          <div class="col-2" id="box8">
            <div class="box-text">
              <button class="btn" id="btn8">Dana Thornlow</button>
            </div>
          </div>
          <div class="col-3" id="box9">
            <div class="box-text">
              <button class="btn" id="btn9">Erica Holt</button>
            </div>
          </div>
        </div>

        <!-- row 4-->
        <div class="row">
          <div class="col-1" id="box10">
            <div class="box-text">
              <button class="btn" id="btn10">Jacqueline Glyman</button>
            </div>
          </div>
          <div class="col-2" id="box11">
            <div class="box-text">
              <button class="btn" id="btn11">Jasmine Peng</button>
            </div>
          </div>
          <div class="col-3" id="box12">
            <div class="box-text">
              <button class="btn" id="btn12">Jaye Ren</button>
            </div>
          </div>
        </div>

        <!-- row 5 -->
        <div class="row">
          <div class="col-1" id="box13">
            <div class="box-text">
              <button class="btn" id="btn13">Julia Albanese</button>
            </div>
          </div>
          <div class="col-2" id="box14">
            <div class="box-text">
              <button class="btn" id="btn14">Julia Walsh</button>
            </div>
          </div>
          <div class="col-3" id="box15">
            <div class="box-text">
              <button class="btn" id="btn15">Kiara Olmeda</button>
            </div>
          </div>
        </div>

        <!-- row 6 -->
        <div class="row">
          <div class="col-1" id="box16">
            <div class="box-text">
              <button class="btn" id="btn16">Lucy Raymond</button>
            </div>
          </div>
          <div class="col-2" id="box17">
            <div class="box-text">
              <button class="btn" id="btn17">Maya Coben</button>
            </div>
          </div>
          <div class="col-3" id="box18">
            <div class="box-text">
              <button class="btn" id="btn18">Niara Hardister</button>
            </div>
          </div>
        </div>

        <!-- row 7 -->
        <div class="row">
          <div class="col-1" id="box19">
            <div class="box-text">
              <button class="btn" id="btn19">Samantha Lee</button>
            </div>
          </div>
          <div class="col-2" id="box20">
            <div class="box-text">
              <button class="btn" id="btn20">Shannon Su</button>
            </div>
          </div>
          <div class="col-3" id="box21">
            <div class="box-text">
              <button class="btn" id="btn21">Virginia Boldt</button>

            </div>
          </div>
        </div>


      </div>
    <!-- <?php include "includes/modalInfo.php"; ?> -->
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
