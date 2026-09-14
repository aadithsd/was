<?php
   session_start();
   if( isset( $_SESSION['counter'] ) ) 
   {
   $_SESSION['counter'] += 1;
   }
   else 
   {
      $_SESSION['counter'] = 1;
   }
   print "website visit Session counter example";	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
?>
<html> 
   <head>
      <title>Setting up a PHP session</title>
   </head>
   <body>
      <a href="http://www.amrita.edu">www.amrita.edu</a> 
      <?php  echo ( $msg ); ?>
   </body>
</html>