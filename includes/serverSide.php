<?php
  $HIDDEN_ERROR_CLASS ="hiddenError";

    $submit = $_REQUEST["submit"];

    $sidebarEmailValid = false;
    $page = basename($_SERVER['PHP_SELF']);

    $succes = false;

    if (isset($submit)) {

      $wasClicked = true;

      $sidebarEmail = $_REQUEST["sidebarEmail"];

      if (!empty($sidebarEmail) && filter_var($sidebarEmail, FILTER_VALIDATE_EMAIL)){
        $sidebarEmailValid = true;
      } else {
        $sidebarEmailValid = false;
      }


      if($sidebarEmailValid){
        //header("Location: " . $page);
        session_start();
        $success = true;
        $_SESSION['email'] = $sidebarEmail;
        return;
      } /*show error --> done by echo? */

    } else {
      error_log("no email submitted");
      $sidebarEmailValid = true;
      $wasClicked = false;

    }
 ?>
