<?php
   setcookie("Name", "Amrita", time()+3600, "/","", 0);
   setcookie("Age", "25", time()+3600, "/", "",  0);
?>
<html>
     <head>
      <title>Setting Cookies with PHP</title>
   </head>
     <body>
      <?php echo "Cookies are set-Name and age"?><br>
      <?php echo "Name set"?><br>
      <?php echo "Age set"?><br>
   </body>
   
</html>