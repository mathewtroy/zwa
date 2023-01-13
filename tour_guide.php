<?php
   session_start();
   //ob_start(); // needs to be added here

   @require "config.php";
   // import Validation from PHP file
   @require "lib/val_comment.php";

   // Import comment from PHP file
   @require "blocks/import_comment.php";
   
?><!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tour_guide</title>

      <!-- Import CSS section from PHP file -->
      <?php require "blocks/import_css.php" ?>

   </head>

   <body>
      
      <!-- Import header section from PHP file -->
      <?php require "includes/_header.php" ?>

      <div class="yellows">
         <div class="heading-tour_guide"> 
            <h1>Tour guide</h1>
         </div>
      </div>

      <!-- Import tour_guide section from PHP file -->
      <?php require "blocks/import_tour_guide.php" ?>

      <!-- Import footer section from PHP file -->
      <?php require "includes/_footer.php" ?>

      <!-- Validate comments form JS-file -->
      <script src="js/comment.js"></script>

   </body>
</html>