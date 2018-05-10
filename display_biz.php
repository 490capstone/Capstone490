<?php 
include'db.php';
?>
<html>
<head><link rel="stylesheet" href="style.cc"></head>
<body>
<?php
echo "<br><h1>Your search results</h1><br>";
echo "Business Name: Hogwarts";
echo "<br>";
echo "Industry: Manufacturing";
echo "<br>";
echo "Contact Person: Albus Dumbledore";
echo "<br>";
echo "Phone Number: 5269789";
echo "<br>";
echo "Address: 44 Shirley Ave. West Chicago, IL 60185";
?>
<br><br>
    <h2>All Businesses:</h2>
    <div class="article-container">
      <?php
        $sql = "SELECT * FROM Business";
        $result = mysqli_query($conn, $sql);
        $resultCount = mysqli_num_rows($result);

        if ($resultCount > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
			echo "<div class='article-box'>";
            echo "<h3>Business Name: ".$row[Name]."</h3>";
              echo "<p>Industry: ".$row[Industry]."</p>";
              echo "<p>Contact Person: ".$row[Contact_Person]."</p>";
              echo "<p>Phone Number: ".$row[Phone_Number]."</p>";
              echo "<p>Address: ".$row[Address]."</p>";
            echo "</div>";
          }
        }
      ?>
    </div>
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