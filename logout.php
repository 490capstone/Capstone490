<?php
session_unset(); 
session_destroy(); 
?>
<html>
<head><link rel="stylesheet" href="style.cc"></head>
<body>
	<div align="center">
	<h2>You Are Now Logged Out</h2>
	<br>
	<h3>Click Here to Login</h3>
	<form action="index.php">
	<input type="submit" value="Logon">
	</form>
	</div>
</body>
</html>