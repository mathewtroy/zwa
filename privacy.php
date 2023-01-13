<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>privacy</title>

      <!-- Import CSS section from PHP file -->
      <?php require "blocks/import_css.php" ?>

   </head>

   <body>
      
      <!-- Import header section from PHP file -->
      <?php require "includes/_header.php" ?>

      <div class="yellows">
         <div class="heading-privacy"> 
            <h1>Privacy Policy</h1>
         </div>
      </div>

      <!-- Import privacy section from PHP file -->
      <?php require "blocks/import_privacy.php" ?>


      <!-- Import footer section from PHP file -->
      <?php require "includes/_footer.php" ?>

   </body>
</html>