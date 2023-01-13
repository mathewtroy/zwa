<!-- Output of Table with List starts -->

<div class="table-responsive">

   <table class="table table-boardered">
      
      <thead>
         <tr>
            <th>Country</th>
            <th>Name</th>
            <th>Contact email</th>
         </tr>
      </thead>

      <tbody>

         <?php

            $sort_options ="";

            if(isset($_GET["sort_alphabet"])) {

               if($_GET["sort_alphabet"]== "a-z") {
                  $sort_options = "ASC";
               } elseif($_GET["sort_alphabet"]== "z-a") {
                  $sort_options = "DESC";
               }
            }
            $query_sort = "SELECT * FROM pagination";


            if($searchFormIsSent) {

               $search_country = ($_POST['search_country']);

               $validateSearchMin = valSearchMin($search_country);
               $validateSearchMax = valSearchMax($search_country);
               $validateSearchPattern = valSearchPattern($search_country);

               if ($validateSearchMin && $validateSearchMax 
               && $validateSearchPattern) {
                  $query_sort .= " WHERE emp_country LIKE '%{$search_country}%'";
                  // je to OK

               } else {
                     // nastala chyba musim uzivateli ukazat errory
               }

            }

            $query_sort.=" ORDER BY emp_country $sort_options";
            $query_run = mysqli_query($conn, $query_sort);

            if (mysqli_num_rows($query_run) > 0) {
               foreach($query_run as $row) {

         ?>

                  <tr> 
                     <td><?= $row['emp_country']; ?> </td>
                     <td><?= $row['emp_name']; ?> </td>
                     <td><?= $row['emp_email']; ?> </td>
                  </tr>
         <?php

               }
            }

            else { ?>

               <tr>
                  <td colspan="3">No records found</td>

               </tr>

               <?php
            }

               ?>
      </tbody>

   </table>

</div>

<!-- Output of Table with List ends -->
