<?php

  if(!isset($_SESSION["token"]) ) {
        exit("Token not set. Please reload this page.");
      }

  // unset($_SESSION["token"]);

  // check tokens
  // echo $_POST["token"] . ' == ' . $_SESSION["token"];

  if($_POST["token"] == $_SESSION["token"]) {

      if (time() >= $_SESSION["token-expire"]) {
        exit("Token expired. Please reload this page.");
      }

      // echo "OK";
      unset($_SESSION["token"]);
      unset($_SESSION["token-expire"]);
  }
   

  // Invalid token
  else { 
    exit("CSRF ATTACK! INVALID TOKEN. Please reload this page."); 
  }


?>