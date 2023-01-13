<?php

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



// DB connection
@require "config.php";

// import Validation from PHP file
@require "lib/validate.php";


// The values entered by the user are not lost.
// An incorrectly completed form will be rejected and returned for correction. 
// All data will remain pre-filled. The only exception is password fields.
// value="<?= htmlspecialchars($login); >"
// value="<?= htmlspecialchars($firstname); >"
// value="<?= htmlspecialchars($email); >"

$login = '';
$firstname = '';
$email = '';

$formIsSent =  isset($_POST['do_reg']);

if($formIsSent) {
   
   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $login = mysqli_real_escape_string($conn, $_POST['login']);
   
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   
   $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

   $select = " SELECT * FROM user_form WHERE email = '$email' ";
   $select_login = " SELECT * FROM user_form WHERE login = '$login' ";
   $result = mysqli_query($conn, $select);
   $result_login = mysqli_query($conn, $select_login);


   $validateLoginMin = valLoginMin($login);
   $validateLoginMax = valLoginMax($login);
   $validateLoginPattern = valLoginPattern($login);

   $validateNameMin = valNameMin($firstname);
   $validateNameMax = valNameMax($firstname);
   $validateNamePattern = valNamePattern($firstname);

   $validateEmailAll = valEmailAll($email);

   $validatePasswordMin = valPasswordMin($pass);
   $validatePasswordMax = valPasswordMax($pass);

   // Check unique email address
   if(mysqli_num_rows($result) > 0){
      $error = 'This email is already used!';

   // Check unique login
   }else if(mysqli_num_rows($result_login) > 0){
      $error = 'This login is already used!';

   }else{
      // Check password
      if($pass != $cpass){
         $error = 'Password is not matched!';
      } else
         if (($validateLoginMin && $validateLoginMax && $validateLoginPattern
            && $validateNameMin && $validateNameMax && $validateNamePattern
            && $validateEmailAll && $validatePasswordMin && $validatePasswordMax)) {
         
            $insert = "INSERT INTO user_form(login, firstname, email, password, user_type) 
            VALUES('$login','$firstname','$email','$hashed_password','$user_type')";

            mysqli_query($conn, $insert);
            // everything is OK, I can work with data
            // perhaps create a new user in the DB
            header('location:login_form.php');
            // exit;
         }
         else {
            // echo ("Error");
            // error, I stop at the form and display errors
         }
 
   } 

};

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- Import CSS section from PHP file -->
   <?php require "blocks/import_css.php" ?>

</head>
<body>
   
<div class="form-container" id="registration">

   <form 
   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
   class="form" 
   id="form" 
   method="post">
   
      <h3>Register now</h3>

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
         <span class="error"></span>
          
         <?php
               if (isset($validateLoginMin) && $validateLoginMin == false) {
                  echo '<span class="error">Login must be at least 4 
                  characters</span>';
               }

               if (isset($validateLoginMax) && $validateLoginMax == false) {
                  echo '<span class="error">Login must be no more than 20 
                  characters</span>';
               }

               if (isset($validateLoginPattern) && $validateLoginPattern == false) {
                  echo '<span class="error">Login must contain only Lowercase 
                  Latin alphabets and numbers</span>';
               }
         ?>

      </div>


      <div class="form-control">
         <label for="firstname">Firstname</label>
         <p class="inform">Use only Latin letter, min. 2 characters,
            max. 20 characters</p>
         <input type="text" 
         name="firstname" 
         value="<?= htmlspecialchars($firstname); ?>"
         placeholder="Enter firstname (Required)"
         required pattern ='[A-Za-z].{1,19}'
         id="firstname">
         <span class="error"></span>
          
         <?php
               if (isset($validateNameMin) && $validateNameMin == false) {
                  echo '<span class="error">Firstname must be at least 2 
                  characters</span>';
               }

               if (isset($validateNameMax) && $validateNameMax == false) {
                  echo '<span class="error">Firstname must be no more than 
                  20 characters</span>';
               }

               if (isset($validateNamePattern) && $validateNamePattern == false) {
                  echo '<span class="error">Firstname must contain only Latin 
                  alphabets</span>';
               }    
         ?>

      </div>


      <div class="form-control">
         <label for="email">Email</label>
         <p class="inform">Use an email like - example@mail.cz, do not use special 
            characters</p>
         <input type="email" 
         name="email"  
         value="<?= htmlspecialchars($email); ?>"
         placeholder="Enter email (Required)"
         required pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'
         id="email">
         <span class="error"></span>
          
         <?php
               if (isset($validateEmailAll) && $validateEmailAll == false) {
                  echo '<span class="error">Provide a valid email address, 
                  please</span>';
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
                  echo '<span class="error">Password must be at least 6 
                  characters</span>';
               }

               if (isset($validatePasswordMax) && $validatePasswordMax == false) {
                  echo '<span class="error">Password must be no more than 60 
                  characters</span>';
               }    
         ?>

      </div>


      <div class="form-control">
         <label for="password">Password check</label>
         <p class="inform">Use the same password</p>
         <input type="password" 
         name="cpassword" 
         placeholder="Confirm password (Required)"
         required pattern = '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,60}'
         id="cpassword">
         <span class="error"></span>
  
      </div>


      <div class="form-control"> 
         <label>Type of user</label>
         <select name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
         </select>
      </div>


      <input type="submit" name="do_reg" value="register now" class="form-btn">
      
      <p class="redirect">Already have an account? 
         <a href="login_form.php">
            <i class="fas fa-sign-in-alt"></i> Login</a>
      </p>

      <p class="redirect"> Go to Website
         <a href="home.php">
         <i class="fas fa-home"></i> Home</a>
      </p>
   </form>

</div>


      <!-- Validate Registration form JS-file -->
      <script src="js/register_form.js"></script>

</body>
</html>