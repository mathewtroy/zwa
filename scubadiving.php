<?php
   session_start();

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
      <title>scubadiving</title>

      <!-- Import CSS section from PHP file -->
      <?php require "blocks/import_css.php" ?>

   </head>

   <body>
      
      <!-- Import header section from PHP file -->
      <?php require "includes/_header.php" ?>

      <div class="yellows">
         <div class="heading-scubadiving"> 
            <h1>Scuba diving</h1>
         </div>
      </div>   

      <!-- Import scubadiving section from PHP file -->
      <?php require "blocks/import_scubadiving.php" ?>

      <!-- Import footer section from PHP file -->
      <?php require "includes/_footer.php" ?>

      <!-- Validate comments form JS-file -->
      <script src="js/comment.js"></script>      

   </body>
</html>