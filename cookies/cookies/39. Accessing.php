<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
       <?php
         if( isset($_COOKIE["name"]))
            echo "Welcome to cookies Name is=" . $_COOKIE["name"] . "<br />";
            else
            echo "Sorry... Not recognized Not set." . "<br />";
      ?>
      
   </body>
</html>