   <!-- Import CSS starts -->

   <!-- Swiper css link  -->
   <link rel="stylesheet" 
   href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

   <!-- Font awesome cdn link  -->
   <link rel="stylesheet" 
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css">


   <!-- Custom main css file link  -->
   <link rel="stylesheet" href="css/style.css"> 

   <!-- Custom footer css file link  -->
   <link rel="stylesheet" href="css/style-footer.css">

   <!-- Media queries  -->
   <link rel="stylesheet" href="css/media.css">  

   <!-- Media print -->
   <link rel="stylesheet" href="css/print.css"> 

   
   <!-- Darkmode implementation-->
   <?php
      
      if(!isset($_SESSION["theme"])) {
         $_SESSION["theme"] = "light";
      }
   
         $themeStyleSheet = 'light-theme.css';

      if (isset($_GET['theme'])) {
         if($_GET['theme'] == 'dark') {
            $themeStyleSheet = 'css/dark-theme.css';
            $_SESSION["theme"] = "dark";
         } else {
            $themeStyleSheet = 'css/light-theme.css';  
            $_SESSION["theme"] = "light";
         }
      } else {
         $themeStyleSheet = ($_SESSION["theme"] == "light")?'css/light-theme.css':'css/dark-theme.css';
      } $themeToggle = ($themeStyleSheet == 'css/dark-theme.css') ? 'light' : 'dark';  
   ?>

   <link href="<?php echo $themeStyleSheet; ?>" rel="stylesheet">


   <!-- Import CSS ends -->
   
