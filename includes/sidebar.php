
<div id="sidebar" class="sidebar <?php if (($wasClicked) && ($sidebarEmailValid)) { echo("slideIn"); } ?>">

  <!-- Title/Logo Placement -->
  <div class='title'>

    <a id="logolink" href="index.php"><img id="logo" src="images/shadowsLogo.png" alt="logo"></a>
  </div>

  <!-- Vertical Navigation Bar -->
  <div class='navigation'>

        <nav class ='nav'>
          <ul class='onclick-nav'>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>">
              <a href='index.php'>Home</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'members.php'){echo 'active'; }else { echo ''; } ?>">
              <a href="members.php">Members</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'media.php'){echo 'active'; }else { echo ''; } ?>">
              <a href="media.php">Media</a></li>
            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'join.php'){echo 'active'; }else { echo ''; } ?>">
              <a href="join.php">Join</a></li>
          </ul>
        </nav>
  </div>


    <!-- email form here -->
    <div class= "<?php if (!($wasClicked)) { echo($HIDDEN_ERROR_CLASS); } else {echo("show"); } ?> sidebarForm" >

      <div id= "response" class="response <?php if (($wasClicked) && ($sidebarEmailValid)) { echo("show"); } ?>">
        <p id="responseptag"> Email recieved. Thank you, <?php echo($sidebarEmail);?>! </p>
      </div>

      <div id="formDiv" >
        <form id="emailForm" method="post" class="<?php if (($wasClicked) && ($success)) { echo($HIDDEN_ERROR_CLASS); } ?>" novalidate>
        <p> Join our listserv: </p>

        <input id="sidebarEmail"  type="email" name="sidebarEmail" placeholder="Enter your email here." value="<?php echo($sidebarEmail);?>" required>
        <span class="errorContainer <?php if ($sidebarEmailValid) { echo($HIDDEN_ERROR_CLASS); } ?> sidebarEmailError" id ="sidebarEmailError">
          Incorrect Email format detected.
        </span>
          <button id="submit" type="submit" value="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>


  <!-- Social Media Icons -->
  <div class="socialmedia">
    <a href="https://www.facebook.com/shadowsdancetroupecornell/"><img class="mediaicon" alt="facebook" src="images/icons/facebook.png"/></a>
    <a href="https://www.youtube.com/user/cornellshadows"><img class="mediaicon" alt="youtube" src="images/icons/youtube.png"/></a>
    <a href="javascript:;" class="clickForm clickMe"> <img class="mediaicon" id="mail" alt="mail" src="images/icons/subscription.png"/></a>
  </div>



</div>
