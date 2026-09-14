//LFI-Local file injection

<html>
<body>
<form>
<form action="getp.php" method ="GET">
<h1>Welcome to Local FIle inclusion</h1>
//<a href="form7.html">Redirecting to a malicious website</a><br>
<a href="https://www.hackerrank.com">Redirecting to a malicious website</a><br>
Username: <input type = "text" name = "usrname" required/> <br>
Password:<input type = "text" name = "password" required/> <br>
<input type="submit"/>
</form>
</body>
</html>