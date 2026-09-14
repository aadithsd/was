<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
       <?php
         if( isset($_COOKIE["age"]))
            echo "Welcome to cookies Age is=" . $_COOKIE["Age"] . "<br />";
            else
            echo "Sorry... Not recognized Not set." . "<br />";
      ?>
      
   </body>
</html>