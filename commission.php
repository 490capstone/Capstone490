<?php 
include'db.php';
?>

<html>
<head><link rel="stylesheet" href="style.cc"></head>
<body>
	<div>
		<h1>
		Commission Report
		</h1>
	</div>
	<div>
		<?php
		echo "Anthony Robbins: $70,000";
		echo "<br>";
		echo "Keith Ferrazzi: $102,000";
		echo "<br>";
		echo "John Maxwell $220,000";
		echo "<br>";
		echo "Mike Tyson $40,000";
		echo "<br>";
		echo "Joey Boombots: $0";
		echo "<br>";
		echo "<h3>Total Commission Revenue: $432,000</h3>";
		?>
	</div>
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