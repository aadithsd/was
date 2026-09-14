<?php
   setcookie( "name","0", time()- 60, "/","", 0);
   setcookie( "age", "0", time()- 60, "/","", 0);
?>
<html>
   
   <head>
      <title>Deleting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Deleted Cookies" ?>
   </body>
   
</html>