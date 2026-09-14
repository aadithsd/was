<!DOCTYPE html>
<html>
<head>
    <title>BAT File Demo</title>
</head>
<body>
<h2>Run BAT File</h2>
<form method="post">
    <button type="submit" name="run">Run BAT File</button>
</form>
<?php
if (isset($_POST['run'])) {
    $bat = "C:\\xampp\\htdocs\\lfidemo\\ex.bat";
$output = shell_exec('cmd /c "' . $bat . '"');
   echo "<h3>Output:</h3>";
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
}
?>

</body>
</html>