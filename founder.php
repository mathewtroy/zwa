<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Founder</title>

      <!-- Import CSS section from PHP file -->
      <?php require "blocks/import_css.php" ?>

   </head>

   <body>
      
      <!-- Import header section from PHP file -->
      <?php require "includes/_header.php" ?>

      <div class="yellows">
      <div class="heading-founder">
          
         <h1>Founder</h1>
         
         <!-- Buttons for moving to the next and previous pages -->
         <div class="content-page">

            <!-- page 3 -->
            <a href="book.php" class="btn"> ◄ </a>

            <!-- page 5 -->
            <a href="home.php" class="btn"> ► </a>

         </div>  

      </div>
      </div>

      <!-- Import founder section from PHP file -->
      <?php require "blocks/import_founder.php" ?>

      <!-- Import footer section from PHP file -->
      <?php require "includes/_footer.php" ?>

   </body>
</html>