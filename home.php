<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>

      <!-- Import CSS section from PHP file -->
      <?php require "blocks/import_css.php" ?>

   </head>

   <body>

<!-- 
images/bg/header-bg-bridge.png
images/bg/header-bg-home-waterfall.gif
-->
      <!-- Import header section from PHP file -->
      <?php require "includes/_header.php" ?>

      <div class="yellows">
         <!-- background of about -->
         <div class="heading-home"> 
            
            <h1>Home</h1>
         
            <!-- Buttons for moving to the next and previous pages -->
            <div class="content-page">            
               
               <!-- page 5 -->
               <a href="founder.php" class="btn"> ◄ </a>

               <!-- page 2 -->
               <a href="about.php" class="btn"> ► </a>

            </div> 
         </div>
      </div>

      <!-- Import cervices section from PHP file -->
      <?php require "blocks/services.php" ?>

      <!-- Import "home packages" section from PHP file -->
      <?php require "blocks/import_home_packages.php" ?>

      <!-- Import offer section from PHP file -->
      <?php require "blocks/offer.php" ?>

      <!-- Import footer section from PHP file -->
      <?php require "includes/_footer.php" ?>

   </body>
</html>