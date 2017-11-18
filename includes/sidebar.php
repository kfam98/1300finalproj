<div id="sidebar" class="sidebar">
  <!-- Title/Logo Placement -->
  <div class='title'>
    <img id="logo" src="images/shadowsLogo.png" alt="logo">
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

  <!-- Social Media Icons -->
  <div class="socialmedia">
    <a href="https://www.facebook.com/shadowsdancetroupecornell/"><img class="mediaicon" alt="facebook" src="images/icons/facebook.png"/></a>
    <a href="https://www.youtube.com/user/cornellshadows"><img class="mediaicon" alt="youtube" src="images/icons/youtube.png"/></a>
  </div>
</div>
