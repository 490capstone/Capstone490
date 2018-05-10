<?php
//takes input from index.php and puts it into variables
$POSTuser = $_POST['username'];
$POSTpass = $_POST['password'];

if ($POSTuser == "anthonyrobbins" && $POSTpass == "chicken"){
		$_SESSION['Name'] = "Anthony Robbins";
		$_SESSION['UserID'] = 1;
		header('Location: salesperson_home.php');
} elseif ($POSTuser == "keithferrazzi" && $POSTpass == "chicken"){
		$_SESSION['Name'] = "Keith Ferrazzi";
		$_SESSION['UserID'] = 2;
		header('Location: salesperson_home.php');
} elseif ($POSTuser == "johnmaxwell" && $POSTpass == "chicken"){
		$_SESSION['Name'] = "John Maxwell";
		$_SESSION['UserID'] = 3;
		header('Location: salesperson_home.php');
} elseif ($POSTuser == "miketyson" && $POSTpass == "chicken"){
		$_SESSION['Name'] = "Mike Tyson";
		$_SESSION['UserID'] = 4;
		header('Location: salesperson_home.php');
} elseif ($POSTuser == "manager" && $POSTpass == "admin"){
		$_SESSION['Name'] = "Sales Manager";
		$_SESSION['UserID'] = 5;
		header('Location: manager_home.php');
} else {
	header('Location: failed.php');
}
?>