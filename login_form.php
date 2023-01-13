<?php
/** Function mysqli_real_escape_string()
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
 * This function is used to create a legal SQL string that you can use in an SQL statement. The given string is encoded to produce an escaped SQL string, taking into account the current character set of the connection.
 *
 * @param mysqli $mysql Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()
 * @param string $string The string to be escaped. Characters encoded are `NUL (ASCII 0), \n, \r, \, ', ", and
 *                           Control-Z`.
 * @return string Returns an escaped string.
 */

/*-----------------------------------------------------------------------------*/



 /** Function mysqli_query()
 * Performs a query on the database
 * Performs a `query` against the database.
 *
 * @param mysqli $mysql Procedural style only: A mysqli object returned by mysqli_connect() or mysqli_init()
 * @param string $query The query string. Warning Security warning: SQL injection If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the mysqli_real_escape_string() function.
 * @param int|null $result_mode The result mode can be one of 3 constants indicating how the result will be returned from the MySQL server. `MYSQLI_STORE_RESULT` (default) - returns a mysqli_result object with buffered result set. `MYSQLI_USE_RESULT` - returns a mysqli_result object with unbuffered result set. As long as there are pending records waiting to be fetched, the connection line will be busy and all subsequent calls will return error `Commands out of sync`. To avoid the error all records must be fetched from the server or the result set must be discarded by calling mysqli_free_result(). `MYSQLI_ASYNC` (available with mysqlnd) - the query is performed asynchronously and no result set is immediately returned. mysqli_poll() is then used to get results from such queries. Used in combination with either `MYSQLI_STORE_RESULT` or `MYSQLI_USE_RESULT` constant.
 * @return bool|mysqli_result Returns `false` on failure. For successful queries which produce a result set, such as `SELECT, SHOW, DESCRIBE` or `EXPLAIN`, mysqli_query() will return a mysqli_result object. For other successful queries, mysqli_query() will return `true` .
 */

/*-----------------------------------------------------------------------------*/



/** Function mysqli_num_rows()
 * Gets the number of rows in the result set
 * Returns the number of rows in the result set.
 *
 * @param mysqli_result $result Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().
 * @return int|string An `int` representing the number of fetched rows. Returns `0` in unbuffered mode unless all rows have been fetched from the server.
 */

/*-----------------------------------------------------------------------------*/



/** Function mysqli_fetch_assoc()
 * Fetch the next row of a result set as an associative array
 * Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or `null` if there are no more rows.
 *
 * @param mysqli_result $result Procedural style only: A mysqli_result object returned by mysqli_query(), mysqli_store_result(), mysqli_use_result() or mysqli_stmt_get_result().
 * @return array|bool|null Returns an associative array representing the fetched row, where each key in the array represents the name of one of the result set's columns, `null` if there are no more rows in the result set, or `false` on failure.
 */

/*-----------------------------------------------------------------------------*/



/** Function htmlspecialchars()
 * Convert special characters to HTML entities
 * Certain characters have special significance in HTML, and should be represented by HTML entities if they are to preserve their meanings. This function returns a string with these conversions made. If you require all input substrings that have associated named entities to be translated, use htmlentities() instead.
 *
 * @param string $string The `string` being converted.
 * @param int|null $flags A bitmask of one or more of the following flags, which specify how to handle quotes, invalid code unit sequences and the used document type. The default is `ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401`.
 *                        Available `flags` constants
 *                        | `ENT_COMPAT` | Will convert double-quotes and leave single-quotes alone. |
 *                        | `ENT_QUOTES` | Will convert both double and single quotes. |
 *                        | `ENT_NOQUOTES` | Will leave both double and single quotes unconverted. |
 *                        | `ENT_IGNORE` | Silently discard invalid code unit sequences instead of returning an empty string. Using this flag is discouraged as it » may have security implications . |
 *                        | `ENT_SUBSTITUTE` | Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &#xFFFD; (otherwise) instead of returning an empty string. |
 *                        | `ENT_DISALLOWED` | Replace invalid code points for the given document type with a Unicode Replacement Character U+FFFD (UTF-8) or &#xFFFD; (otherwise) instead of leaving them as is. This may be useful, for instance, to ensure the well-formedness of XML documents with embedded external content. |
 *                        | `ENT_HTML401` | Handle code as HTML 4.01. |
 *                        | `ENT_XML1` | Handle code as XML 1. |
 *                        | `ENT_XHTML` | Handle code as XHTML. |
 *                        | `ENT_HTML5` | Handle code as HTML 5. |
 * @param null|string $encoding An optional argument defining the encoding used when converting characters. If omitted, `encoding` defaults to the value of the default_charset configuration option. Although this argument is technically optional, you are highly encouraged to specify the correct value for your code if the default_charset configuration option may be set incorrectly for the given input. For the purposes of this function, the encodings `ISO-8859-1`, `ISO-8859-15`, `UTF-8`, `cp866`, `cp1251`, `cp1252`, and `KOI8-R` are effectively equivalent, provided the `string` itself is valid for the encoding, as the characters affected by htmlspecialchars() occupy the same positions in all of these encodings. The following character sets are supported:
 *                              Supported charsets
 *                              | ISO-8859-1 | ISO8859-1 | Western European, Latin-1. |
 *                              | ISO-8859-5 | ISO8859-5 | Little used cyrillic charset (Latin/Cyrillic). |
 *                              | ISO-8859-15 | ISO8859-15 | Western European, Latin-9. Adds the Euro sign, French and Finnish letters missing in Latin-1 (ISO-8859-1). |
 *                              | UTF-8 | | ASCII compatible multi-byte 8-bit Unicode. |
 *                              | cp866 | ibm866, 866 | DOS-specific Cyrillic charset. |
 *                              | cp1251 | Windows-1251, win-1251, 1251 | Windows-specific Cyrillic charset. |
 *                              | cp1252 | Windows-1252, 1252 | Windows specific charset for Western European. |
 *                              | KOI8-R | koi8-ru, koi8r | Russian. |
 *                              | BIG5 | 950 | Traditional Chinese, mainly used in Taiwan. |
 *                              | GB2312 | 936 | Simplified Chinese, national standard character set. |
 *                              | BIG5-HKSCS | | Big5 with Hong Kong extensions, Traditional Chinese. |
 *                              | Shift_JIS | SJIS, SJIS-win, cp932, 932 | Japanese |
 *                              | EUC-JP | EUCJP, eucJP-win | Japanese |
 *                              | MacRoman | | Charset that was used by Mac OS. |
 *                              | `''` | | An empty string activates detection from script encoding (Zend multibyte), default_charset and current locale (see nl_langinfo() and setlocale()), in this order. Not recommended. | Note : Any other character sets are not recognized. The default encoding will be used instead and a warning will be emitted.
 * @param bool|null $double_encode When `double_encode` is turned off PHP will not encode existing html entities, the default is to convert everything.
 * @return string The converted `string`.
 *                If the input `string` contains an invalid code unit sequence within the given `encoding` an empty string will be returned, unless either the `ENT_IGNORE` or `ENT_SUBSTITUTE` flags are set.
 */

/*-----------------------------------------------------------------------------*/






// require

/*-----------------------------------------------------------------------------*/



/*-----------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------*/

session_start();

@require 'config.php';

// import Validation from PHP file
@require "lib/val_login.php";


$loginFormIsSent =  isset($_POST['do_login']);

$login = '';

// CSRF generate
// bin2hex — convert binary data into hexadecimal representation
// random_bytes - get cryptographically secure random bytes
// Generates an arbitrary length string of cryptographic random bytes 
// that are suitable for cryptographic use, such as when generating salts, 
// keys or initialization vectors.


if($loginFormIsSent) {
      
      $login = mysqli_real_escape_string($conn, $_POST['login']);
      $pass = ($_POST['password']);


      $select = " SELECT * FROM user_form WHERE login = '$login' ";
      // take login from Database

      $select_password = " SELECT * FROM user_form WHERE password = '$pass' ";
      // take password from Database


      $result_login = mysqli_query($conn, $select);
      // check True или False (login)  

      $result_password = mysqli_query($conn, $select_password);
      // check True или False (password) 

      $num = mysqli_num_rows($result_login);
      
      $num_pass = mysqli_num_rows($result_password);

   // Start
      $validateLoginMin = valLoginMin($login);
      $validateLoginMax = valLoginMax($login);
      $validateLoginPattern = valLoginPattern($login);

      $validatePasswordMin = valPasswordMin($pass);
      $validatePasswordMax = valPasswordMax($pass);

   if ($validateLoginMin && $validateLoginMax && $validateLoginPattern
      && $validatePasswordMin && $validatePasswordMax) {
      // it is OK
      // I will save the data or something

         // password and login are True    
         if( $num == 1) {

            while ($row = mysqli_fetch_assoc($result_login)) {
               if (password_verify($pass, $row['password'])){
                  $login = true;
      
                  if($row['user_type'] == 'admin'){
      
                     $_SESSION['admin_name'] = $row['firstname'];
                     // redirect to Admin page
                     header('location:admin_page.php');
            
                  }elseif($row['user_type'] == 'user'){
            
                     $_SESSION['user_name'] = $row['firstname'];
                     // redirect to User page
                     header('location:user_page.php');
                     
                  }
               }
               if ( $num_pass != 1) {
                  $error = 'Incorrect Password!';
               }
            }
      
         } else{
            $error = 'Incorrect Login! Try it again';
         }


   } else {
      // an error occurred, I have to show the user an error
   }

   };
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- Import CSS section from PHP file -->
   <?php require "blocks/import_css.php" ?>

</head>
<body>
   
<div class="form-container">

<!-- action="#" -->
<!-- <php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> -->
   <form  
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  
      class="login_form"
      id="login_form" 
      method="post"> 

      <h3>login now</h3>

      <?php
         if(isset($error)) {
            echo '<span class="error-msg">'.$error.'</span>';
         };
      ?>

      <div class="form-control">
         
         <label for="login">Login</label>
         <p class="inform">Use only Lowercase Latin letter and digits, min. 4 
            characters, max. 20 characters</p>
         <input type="text" 
         name="login"  
         value="<?= htmlspecialchars($login); ?>"
         placeholder="Enter login (Required)" 
         required pattern ='[a-z0-9].{3,19}'
         id="login">
         <div>
            <p>Suggestions: <span class="ajax" id="txtHint"></span></p>
         </div>
         <span class="error"></span>
        
         <?php
               if (isset($validateLoginMin) && $validateLoginMin == false) {
                  echo '<span class="error">Login must be at least 4 characters</span>';
               }

               if (isset($validateLoginMax) && $validateLoginMax == false) {
                  echo '<span class="error">Login must be no more than 20 characters</span>';
               }

               if (isset($validateLoginPattern) && $validateLoginPattern == false) {
                  echo '<span class="error">Login must contain only Lowercase 
                  Latin alphabets and numbers</span>';
               }
         ?>

      </div>


      <div class="form-control">
         <label for="password">Password</label>
         <p class="inform">Use at least 1 digit, 1 Lowercase and 1 Uppercase 
            Latin letter,min. 6 characters, max. 60 characters</p> 
         <input type="password" 
         name="password" 
         placeholder="Enter password (Required)"
         required pattern = '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,60}'
         id="password">
         <span class="error"></span>
        
         <?php
               if (isset($validatePasswordMin) && $validatePasswordMin == false) {
                  echo '<span class="error">Password must be at least 6 characters</span>';
               }

               if (isset($validatePasswordMax) && $validatePasswordMax == false) {
                  echo '<span class="error">Password must be no more than 60 characters</span>';
               }
   
         ?>
      </div>

<!-- 
   
   CSRF it works

   If hacker wants to to CSRF attack we prevent it.
   Not CSRF, no problem..

-->


      <input type="submit" name="do_login" value="login now" class="form-btn">
      

      <p class="redirect">Do not have an account? 
         <a href="register_form.php">
            <i class="fas fa-user-plus"></i> Register</a>
      </p>
      
      <p class="redirect"> Go to Website
         <a href="home.php">
         <i class="fas fa-home"></i> Home</a>
      </p>
   </form>


</div>

      <!-- Validate Login + Ajax Suggestion form JS-file -->
      <script src="js/login_form.js"></script>

</body>
</html>
