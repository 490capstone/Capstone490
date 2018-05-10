<?php
include'db.php'; 

$Name = $_POST['name'];
$SSN = $_POST['SSN'];
$Address = $_POST['Address'];
/*
$mysqli->real_query("INSERT INTO Salesperson (Name,Address,SSN)
 VALUES (" . $Name . "," . $Address . "," . $SSN . ")");
if (mysql_errno() == True)
{
	echo "Successfully Added";
	header('Location: manager_home.php');
} else {
	echo "Failed";
}
*/
echo $Name . "  was successfully added as a salesperson!";
?>

<html>
<head><link rel="stylesheet" href="style.cc"></head>
<body>
	<br>
	<br>
	<br>
	<div>
	Click Here to Return to the Homepage
	<form  action="manager_home.php" method="POST">
	<input type="submit" value="Home">
	</form>
	</div>
	<br>
	Click Here to Logout 
	<br>
	<form action="logout.php" method="POST">
	<input type="submit" name="logout" value="Logout">
	</form>
</body>
</html>
