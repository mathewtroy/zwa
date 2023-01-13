<!-- Section Search and Filter starts -->

<form name="search_form" 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
    method="POST"
    id="search_form">


    <!-- This function is available only for Admin  -->
    <?php if (isset($_SESSION['admin_name']) ): ?>

    <label>Search for:</label> 
    <input type="text" 
      name="search_country" 
      value="<?= htmlspecialchars($search_country); ?>"

      id="search_country">
    <span class="error"></span>



<!-- 
      placeholder="Value to search"
      required pattern ='[A-Za-z].{0,10}'

-->
    <?php
        if (isset($validateSearchMin) && $validateSearchMin == false) {
            echo '<span class="error">Searching element is required!</span>';
        }

        if (isset($validateSearchMax) && $validateSearchMax == false) {
            echo '<span class="error">Searching element must be no more 
            than 10 characters</span>';
        }

        if (isset($validateSearchPattern) && $validateSearchPattern == false) {
            echo '<span class="error">Searching element must contain only 
            Latin alphabets</span>';
        }
    ?>

    <!-- SCRF -->
    <input type="hidden" name="token" value="<?=$_SESSION['token'];?>" >

    <input type="submit" 
      name="search" 
      value="Find a company by country of origin"
      class="form-btn btn">


    <?php endif; ?>

</form>

<!-- Section Search and Filter ends -->