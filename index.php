 
<link type="text/css" rel="stylesheet" href="background.css">
  
    <?php
    // It helps my code.
   
    require_once(__DIR__ . "/controller/login-verify.php");
   // Verifies the login
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser ()) {
   require_once(__DIR__ . "/view/navigation.php");
   }
   // So I can be able to post.
   require_once(__DIR__ . "/controller/create-db.php");
   // I dont know
   require_once (__DIR__ . "/view/footer.php");
   // I can read all my posts.
   require_once(__DIR__ . "/controller/read-posts.php"); 
           ?>
      