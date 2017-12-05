<?php
  $HIDDEN_ERROR_CLASS ="hiddenError";

    $submit = $_REQUEST["submit"];

    if (isset($submit)){
      error_log("user submitted the form");

      $sidebarEmail = $_REQUEST["sidebarEmail"];
      if (!empty($sidebarEmail) && (filter_var($sidebarEmail, FILTER_VALIDATE_EMAIL))) {
        $sidebarEmailValid = true;
      } else {
        $sidebarEmailValid = false;
      }

      if($sidebarEmailValid){
        header("Location: sidebar.php");
        session_start();
        $_SESSION['email'] = $sidebarEmail;

        return;
      }
    } else{
      error_log("no form submitted");

      $sidebarEmailValid = true;
    }
 ?>
