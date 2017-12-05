<?php
  $HIDDEN_ERROR_CLASS ="hiddenError";

    $submit = $_REQUEST["submit"];

    if (isset($submit)){
      error_log("user submitted the email");

      $sidebarEmail = $_REQUEST["sidebarEmail"];

      /*if (!empty($sidebarEmail) ) {
        $emailValid = true;
        if (filter_var($sidebarEmail, FILTER_VALIDATE_EMAIL)) {
          $emailFiltered = true;
        } else {
          $emailFiltered = false;
        }
      } else {
        $emailFiltered = true;
        $emailValid = false;
      }

      sidebarEmailValid = $emailValid && $emailFiltered;
      //if valid allow submission
      if($sidebarEmailValid){
        header("Location: sidebar.php");
        session_start();
        $_SESSION['email'] = $sidebarEmail;

        return;
      }
    }else{
      error_log("no form submitted");
      //no form submitted
      $emailValid = true;
      $emailFiltered = true;
    }*/

      if (!empty($sidebarEmail) && filter_var($sidebarEmail, FILTER_VALIDATE_EMAIL)){
        $sidebarEmailValid = true;
      } else {
        $sidebarEmailValid = false;
      }

      if($sidebarEmailValid){
        header("Location: sidebar.php");
        session_start();
        $_SESSION['email'] = $sidebarEmail;

        return;
      } /*show error --> done by echo? */
    }else{
      error_log("no email submitted");
      $sidebarEmailValid = true;
    }
 ?>
