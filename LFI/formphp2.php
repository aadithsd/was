//RFI
<form action="form6.html" method="post">
 <input type="text" value="html form data" name="name" />
 <input type="submit" name="submit" />
</form>
<?php
 if(isset($_POST['submit']))
  echo 'I am in php script. I know this value is from html Forms for getting user details- '. $_POST['name'];
?> 
</form>

