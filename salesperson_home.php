<html>
<head><link rel="stylesheet" href="style.cc"></head>
<body>
	<div align="center">
	<h1>
	Welcome, Anthony Robbins!
	</h1>
	</div>
	<div align="center">
	Please Enter a Business Name
	<form  action="display_biz.php" method="POST">
	<input type="text" name="businessname" placeholder="Businesss Name">
	<input type="submit" value="Search">
	</form>
	</div>
	<br>
	<br>
	<div class="footer" align="center">
	Click Here to Create a New Business Profile 
	<br>
	<form action="create_new_biz.php" method="POST">
	<input type="submit" value="Create New Business Profile">
	</form>
	<br>
	<br>
	Click Here to Logout 
	<br>
	<form action="logout.php" method="POST">
	<input type="submit" name="logout" value="Logout">
	</form>
	</div>
</body>
</html>

