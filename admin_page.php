<?php
session_start();

// include
@require 'config.php';

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- Import CSS section from PHP file -->
   <?php require "blocks/import_css.php" ?>

</head>
<body>
      
   <div class="container">

      <div class="content">
         <h3>Hi, <span>admin</span></h3>
         <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
         <p>This is an admin page</p>

         <a href="home.php" class="btn">home</a>
         <a href="about.php" class="btn">about</a>
         <a href="book.php" class="btn">book</a>
         <a href="package.php" class="btn">package</a>
         <a href="founder.php" class="btn">founder</a>
         
         <a href="logout.php" class="btn">logout</a>
      </div>

   </div>

</body>
</html>