<!-- Section Sorting ASC and DESC starts -->

<form name="sort_form" 
   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
   method="GET">


   <div class="row">
            
      <label>Sorting option:</label> 
      <select name="sort_alphabet" class="form-control">
         
         <option value="">--Select Option</option>

         <option value="a-z"
            <?php if(isset($_GET['sort_alphabet']) 
            && $_GET['sort_alphabet']=="a-z"){echo "selected";}?>>
            A-Z (Ascending Order)
         </option>

         <option value="z-a"
               <?php if(isset($_GET['sort_alphabet']) 
               && $_GET['sort_alphabet']=="z-a"){echo "selected";}?>>
               Z-A (Descending Order)
         </option>

      </select>

      <button type="submit" class="input-group-text btn" id="basic">
         Sorting companies partners
      </button>

   </div>

</form>

<!-- Section Sorting ASC and DESC ends -->   