<?php
$file = $_GET['file'];
echo "<h2>File Content</h2>";
include($file);
?>