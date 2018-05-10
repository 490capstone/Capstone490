<?php
include'db.php'; 

$Name = $_POST['name'];
$Contact = $_POST['contact'];
$Address = $_POST['naddress'];
$Policy = $_POST['policy'];
$Phone = $_POST['phone'];
$Industry = $_POST['industry'];

/*
$mysqli->real_query("INSERT INTO Business( Name,Address,Contact_Person,Industry,Phone_Number,PolicyID)
 VALUES (" . $Name . "," . $Address . "," . $Contact . "," . $Industry . "," . $Phone . "," . $Policy . ")");
*/
echo $Name . "'s information was successfully entered into the CRM";
?>

<html>
<head><link rel="stylesheet" href="style.cc"></head>
<body>
	<br>
	<br>
	<br>
	<div>
	Click Here to Return to the Homepage
	<form  action="salesperson_home.php" method="POST">
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
