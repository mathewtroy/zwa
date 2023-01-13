<!-- Footer section starts -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Main Links</h3>
         <a href="home.php"> <i class="fas fa-home"></i> Home</a>
         <a href="about.php"> <i class="fas fa-info-circle"></i> About</a>
         <a href="package.php"> <i class="fas fa-suitcase-rolling"></i> Package</a>
         <a href="book.php"> <i class="far fa-money-bill-alt"></i> Book</a>
         <a href="founder.php"> <i class="fas fa-user-circle"></i> Founder</a>
             
         <!-- 
         Unauthorized users see Login page , Register Page
         -->
         <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>
         <a href="login_form.php">
            <i class="fas fa-sign-in-alt"></i> Login</a>
         <a href="register_form.php">
            <i class="fas fa-user-plus"></i> Register</a>
         
         <?php else:?>

         <!-- Authorized users see Add review page -->
         <?php if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ):  ?>
            <a href="logout.php"><i class="fas fa-power-off"></i> Log out</a>

               <?php if(isset($_SESSION['admin_name'])): ?>

                  <a href="admin_page.php">
                     <i class="far fa-address-card"></i>	Personal account</a>

               <?php else: ?>
                  
                  <!-- if(isset($_SESSION['user_name'])): -->
                  <a href="user_page.php">
                     <i class="far fa-address-card"></i>	Personal account</a>

               <?php endif; ?>


         <?php endif; ?> 

         <?php endif; ?>
      </div>

      <div class="box">
         <h3>Additional Links</h3>
         <a href="career.php"> <i class="fas fa-briefcase"></i> Career</a>
         <a href="company.php"> <i class="fas fa-globe-americas"></i> Company</a>
         <a href="privacy.php"> <i class="fas fa-lock"></i> Privacy Policy</a>
         <a href="terms.php"> <i class="fas fa-shield-alt"></i> Terms of Use</a>
         <a href="docs.php"> <i class="fas fa-book"></i> Documents</a>
      </div>


      <!-- Authorized users see Add review page -->
      <?php if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ):  ?>

         <div class="box">
            <h3>Add review</h3>
            <a href="scubadiving.php"> <i class="fas fa-swimmer"></i> Scubadiving</a>
            <a href="skydiving.php"> <i class="fas fa-helicopter"></i> Skydiving</a>
            <a href="snowboarding.php"> <i class="fas fa-snowflake"></i> Snowboarding</a>
            <a href="surfing.php"> <i class="far fa-sun"></i> Surfing</a>
            <a href="tour_guide.php"> <i class="fab fa-fort-awesome-alt"></i> Tours</a>
         </div>
      
      <?php endif; ?>


      <div class="box">
         <h3>Contact Info</h3>
         <a href="tel:+420444333222"> <i class="fas fa-phone">
         </i> Phone Number </a>
         <a href="mailto:krossale@fel.cvut.cz"> <i class="fas fa-envelope">
         </i> Email </a>
         <a href="https://www.facebook.com/kro63/">
            <i class="fab fa-facebook"></i> Facebook </a>
         <a href="https://t.me/troy102102/"> 
            <i class="fab fa-telegram"></i> Telegram </a>
         <a href="https://www.linkedin.com/in/aleksandrkross/">
            <i class="fab fa-linkedin"></i> Linkedin </a>

      </div>

   </div>

   <div class="credit"> Created by 
      <span>Aleksandr K.</span> 
      <br>
      &copy; FEL-2022. All rights reserved! 
   </div>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</section>

<!-- Footer section ends -->