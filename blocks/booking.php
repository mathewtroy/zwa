<!-- Booking section starts -->

<section class="booking">

   <h2 class="heading-title">Book your trip!</h2>

<!--TODO  -->

<!-- For non-users -->
      <!-- 
      Unauthorized users see Login page , Register Page
      -->
      <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>
         
      <p class="not-user">If you have a profile in this website, 
         you can book a tour pack.
         To do this, log into your account.
      </p>
      
      <?php else:?>

<!-- For USERS -->

      <!-- 
      Authorized users see Log Out page
      -->


<!-- <div > -->

   <div class="form-container">
   <form 
   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
   class="book-form" 
   id="book_form" 
   method="post">


      <div class="form-control">

         <label for="name_b" class="inputBox">Firstname</label>
         <p class="inform">Use only Latin letter, min. 2 characters,
            max. 20 characters</p>
         <input type="text" 
         name="name_b" 
         value="<?= htmlspecialchars($name_b); ?>"
         placeholder="Enter firstname (Required)" 
         required pattern ='[A-Za-z].{1,19}'
         id="name_b">
         <span class="error"></span>
<!-- 


 -->
         <?php
               if (isset($validateNameBookMin) && $validateNameBookMin == false) {
                  echo '<span class="error">Firstname must be at least 2 characters</span>';
               }

               if (isset($validateNameBookMax) && $validateNameBookMax == false) {
                  echo '<span class="error">Firstname must be no more than 20 characters</span>';
               }

               if (isset($validateNameBookPattern) && $validateNameBookPattern == false) {
                  echo '<span class="error">Firstname must contain only Latin alphabets</span>';
               }    
         ?>
      </div>


      <div class="form-control">

         <label for="email_b" class="inputBox">Email</label>
         <p class="inform">Use an email like *example@mail.cz, do not use special 
            characters</p>
         <input type="email" 
         name="email_b"  
         value="<?= htmlspecialchars($email_b); ?>"
         placeholder="Enter email (Required)"
         required pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'
         id="email_b">
         <span class="error"></span>
<!-- 
 -->
         <?php
               if (isset($validateEmailBookPattern) && $validateEmailBookPattern == false) {
                  echo '<span class="error">Provide a valid email address, 
                  please</span>';
               }
         ?>
      </div>


      <div class="form-control">
         
         <label for="phone" class="inputBox">Phone</label>
         <p class="inform">Use an phone number like *777222666, use only 
            digits, maximum 9 digits</p>
         <input type="number" 
         name="phone" 
         min= "700000000"
         max= "799999999"
         value="<?= htmlspecialchars($phone); ?>"
         required placeholder="Enter phone number (Required)" 
         id="phone">
         <span class="error"></span>

         <?php

               if (isset($validateStartPhone) && $validateStartPhone == false) {
                  echo '<span class="error">Phone must start from digit 7 
                  and contain 9 characters</span>';
               }
   
         ?>
         <!-- 776123123 - Czech phone number -->
         <!-- User can write only DIGITS because of the type="number" -->

      </div>


      <div class="form-control">
 
         <label for="address" class="inputBox">Address</label>
         <p class="inform">Write your address *do not use special characters</p>
         <input type="text" 
         name="address" 
         value="<?= htmlspecialchars($address); ?>"
         placeholder="Enter your address (Required)"
         required pattern ='[A-Za-z_ ].{3,29}'
         id="address">
         <span class="error"></span>
<!-- 
       
-->
         <?php
               if (isset($validateAddressMin) && $validateAddressMin == false) {
                  echo '<span class="error">Address must be at least 4 characters</span>';
               }

               if (isset($validateAddressMax) && $validateAddressMax == false) {
                  echo '<span class="error">Address must be no more than 40 characters</span>';
               }

               if (isset($validateAddressPattern) && $validateAddressPattern == false) {
                  echo '<span class="error">Address must contain Latin alphabets, digits and space</span>';
               }    
         ?>
      </div>


      <div class="form-control">

         <label for="location" class="inputBox">Where to</label>
         <p class="inform">Write the destination, use only Latin letter</p>
         <input type="text" 
         name="location" 
         value="<?= htmlspecialchars($location); ?>"
         placeholder="Place you want to visit (Required)"
         required pattern ='[A-Za-z].{3,20}'
         id="location">
         <span class="error"></span>

<!-- 
         
-->
         <?php
               if (isset($validateLocationMin) && $validateLocationMin == false) {
                  echo '<span class="error">Location must be at least 4 characters</span>';
               }

               if (isset($validateLocationMax) && $validateLocationMax == false) {
                  echo '<span class="error">Location must be no more than 20 characters</span>';
               }

               if (isset($validateLocationPattern) && $validateLocationPattern == false) {
                  echo '<span class="error">Location must contain only Latin alphabets</span>';
               }    
         ?>
      </div>


<div class="form-control">

         <label for="guests" class="inputBox">How many persons</label>
         <p class="inform">How many people will be on tour *use only digits, maximum 
            10 persons</p>
         <input type="number" 
         name="guests" 
         value="<?= htmlspecialchars($guests); ?>"
         min="1" 
         max="10" 
         required placeholder="Number of guests (Required)"
         id="guests">
         <span class="error"></span>

         <?php
               if (isset($validateGuestsMin) && $validateGuestsMin == false) {
                  echo '<span class="error">Guests must start from 1 person</span>';
               }

               if (isset($validateGuestsMax) && $validateGuestsMax == false) {
                  echo '<span class="error">Guests must end to 10 persons</span>';
               }
         ?>

   </div>


      <div class="form-control">

         <label for="arrivals" class="inputBox">Arrivals</label>
         <p class="inform">Write your departure date *date no early than today</p>
         <input type="date" 
         name="arrivals" 
         value="<?= htmlspecialchars($arrivals); ?>"
         min="<?= date('Y-m-d') ?>" 
         required
         id="arrivals">
         <!-- minimal value is today date -->
         <!-- https://stackoverflow.com/questions/6982692/how-to-set-input-type-dates-default-value-to-today -->
         <span class="error"></span>

      </div>

      <div class="form-control">

         <label for="days" class="inputBox">How many days</label>
         <p class="inform">Write the number of days of rest *use only digits, 
            maximum 14 days</p>
         <input type="number" 
         name="days" 
         value="<?= htmlspecialchars($days); ?>"
         min="1" 
         max="14" 
         required placeholder="Number of days (Required)"
         id="days">
         <span class="error"></span>

         <?php
               if (isset($validateDaysMin) && $validateDaysMin == false) {
                  echo '<span class="error">Must start from 1 day</span>';
               }

               if (isset($validateDaysMax) && $validateDaysMax == false) {
                  echo '<span class="error">Must end to 14 days</span>';
               }
         ?>



      </div>
         
         <!-- CSRF -->
         <input type="hidden" name="token" value="<?=$_SESSION['token'];?>" >

         <input type="submit" name="do_send" value="Send booking" class="btn">
      </div>


      <!-- CSRF -->


   </form>
   </div>

   <?php endif; ?>
   <!-- </div>    -->

</section>

<!-- Booking section ends -->