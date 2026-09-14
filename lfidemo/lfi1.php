#Run http://localhost/lfidemo/lfi1.php?file=demo.txt
<?php
include($_GET['file']);
?>