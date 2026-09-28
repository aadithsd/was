<?php

	session_start();
	
	if(isset($_SESSION['count']))
	{
		$_SESSION['count']++;
	}
	else
	{
		$_SESSION['count']=1;
	}

	echo "<h1> session exmple </h1> ";
	echo "<br>";
	echo "you visited this page " . $_SESSION['count'] . " time's in this session";
?>
