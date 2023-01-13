<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>review</title>

      <!-- Import CSS section from PHP file -->
      <?php require "blocks/import_css.php" ?>
   
   </head>

   <body>
   
<!-- 
      Unauthorized users see Login page , Register Page
-->
      <?php if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ): ?>


      <!-- Import header section from PHP file -->
      <?php require "includes/_header.php" ?>
  
      <div class="yellows">
         <div class="heading-review"> 
            <h1>Thanks</h1> 

            <div>
               <p>Comment was sent</p>
               <p>You can add another</p>
            </div>
         
         </div>
      </div>
         
      <!-- Import footer section from PHP file -->
      <?php require "includes/_footer.php" ?>

<?php else:?>
   <div>
      <h2>Please Login below</h2><br>
      <a href="login_form.php"> <i class="fas fa-sign-in-alt"></i> Login</a>

   </div>

   
<?php endif; ?>

   </body>
</html>