<?php

   $sender = '';
   $message = '';
   $topic_id = '';

   $commentIsSent = isset($_POST['post_comment']); 

   if (!$commentIsSent) {
      $_SESSION["token"] = bin2hex(random_bytes(32));
   }
   // expire token in 10 seconds
   $_SESSION["token-expire"] = time() + 10; // in seconds


   if($commentIsSent) {

      // Verify CSRF token
      if (isset($_POST["token"])) {
      @require 'verify_token.php';
      }
      
//TODO
      $sender = $_POST['sender'];

      if (isset($_SESSION['admin_name'])) $sender = $_SESSION['admin_name'];
      
      elseif (isset($_SESSION['user_name'])) $sender = $_SESSION['user_name'];

      $message = $_POST['message'];
      $topic_id = $_POST['topic_id'];


      $validateReviewMin = valReviewMin($message);
      $validateReviewMax = valReviewMax($message);
      $validateReviewPattern = valReviewPattern($message);

      

      if ($validateReviewMin 
      && $validateReviewMax && $validateReviewPattern) {

         $sql = "INSERT INTO comment_form (sender, message, topic_id)
         VALUES ('$sender', '$message', '$topic_id')";
   
         if ($conn->query($sql) === TRUE) {
         header('Location: review.php');
         }

         // it is OK
         // I will save the data or something
      } else {
            // an error occurred, I have to show the user an error
      }
      
   }

?>