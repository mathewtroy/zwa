<!-- About section starts -->

<section class="about">

   <div class="image">
      <img src="images/about-review.png" alt="review">
   </div>


   <div class="content">
      <h3> Please read comments </h3>
            
      <div class="icons-container">
         
         <div class="icons">
            <i class="fas fa-swimmer"></i>
            <a href="scubadiving.php">Scubadiving</a>
         </div>

         <div class="icons">
            <i class="fas fa-helicopter"></i>
            <a href="skydiving.php">Skydiving</a>
         </div>

         <div class="icons">
            <i class="fas fa-snowflake"></i>
            <a href="snowboarding.php">Snowboarding</a>
         </div>

         <div class="icons">
            <i class="far fa-sun"></i>
            <a href="surfing.php">Surfing</a>
         </div>

         <div class="icons">
            <i class="fab fa-fort-awesome-alt"></i>
            <!-- <span>Tours</span> -->
            <a href="tour_guide.php">Tours</a>
         </div>

      </div>

      <br>

      <!-- 
      Unauthorized users see a message that
      that comments can be left if you log in.
      -->
      <?php
         if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>

         <p class="not-user">If you have already used the services of our company, 
            you can leave your review.
            To do this, log into your account.
         </p>

      <?php endif; ?>

   </div>

</section>

<!-- About section ends -->