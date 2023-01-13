<?php
/** Function nl2br()
 * Inserts HTML line breaks before all newlines in a string
 * Returns `string` with `<br />` or `<br>` inserted before all newlines (`\r\n`, `\n\r`, `\n` and `\r`).
 *
 * @param string $string The input string.
 * @param bool|null $use_xhtml Whether to use XHTML compatible line breaks or not.
 * @return string Returns the altered string.
 */

/*-----------------------------------------------------------------------------*/


 
/** Function mysqli_fetch_assoc
 * Fetch the next row of a result set as an associative array
 * Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or `null` if there are no more rows.
 *
 * @param mysqli_result $result Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().
 * @return array|bool|null Returns an associative array representing the fetched row, where each key in the array represents the name of one of the result set's columns, `null` if there are no more rows in the result set, or `false` on failure.
 */


/*-----------------------------------------------------------------------------*/
/** Function require()
 * require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.
 *
 * @param string $path
 * @return mixed
 */

/*-----------------------------------------------------------------------------*/
   session_start();

   @require "config.php";
   // import Validation from PHP file
   @require "lib/val_search.php";

   $search_country = '';

   $searchFormIsSent = isset($_POST['search']);


   $sql = "SELECT * FROM pagination";

   
   $row_per_page = 4;

   $row = 0;

   if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>0) {
      // must be digits 
      // must be more than 0
      
      $page = $_GET['page'];
   } else {
      $page = 1;
   } 

   $num_per_page = 3;
   $start_from = ($page-1)*3;
    
   $query = " SELECT * FROM pagination LIMIT $start_from,$num_per_page";
   $result = mysqli_query($conn,$query);

   // print_r($result); //
   // print_r(mysqli_fetch_assoc($result));

   if (!$searchFormIsSent) {
      $_SESSION["token"] = bin2hex(random_bytes(32));
   }
   // expire token in 10 seconds
   $_SESSION["token-expire"] = time() + 10; // in seconds

   if ($searchFormIsSent) {

      // Verify CSRF token
      if (isset($_POST["token"])) {
         @require 'verify_token.php';
      }
   }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Companys partners</title>

      <!-- Import CSS section from PHP file -->
      <?php require "blocks/import_css.php" ?>

   </head>

   <body>
      
      <!-- Import header section from PHP file -->
      <?php require "includes/_header.php" ?>

      <div class="yellows">
         <div class="heading-company"> 
            <h1>Partners</h1>
         </div>
      </div>
      
      <!-- Import company section from PHP file -->
      <?php require "blocks/import_company.php" ?>  

      <!-- Import footer section from PHP file -->
      <?php require "includes/_footer.php" ?>

      <!-- Validate Search form JS-file -->
      <script src="js/search.js"></script>

   </body>
</html>