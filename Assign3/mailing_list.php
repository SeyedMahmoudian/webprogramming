<?php
require "connection.php";
session_start();
include ("header.php");
?>
<html>
	<div id="content" class="clearfix">
	<style>
		td{
			border: 1px solid white;
			
		}
		th{
			font-style: bold;
			border : 1px solid white ;
			
		}
	</style>
	<aside>
	<h2>Mailing Address</h2>
	<h3>1385 Woodroffe Ave
	<br>
	Ottawa, ON K4C1A4</h3>
	<h2>Phone Number</h2>
	<h3>(613)727-4723</h3>
	<h2>Fax Number</h2>
	<h3>(613)555-1212</h3>
	<h2>emailAddress</h2>
	<h3>info@wpeatery.com</h3>
	</aside>
	<div class="main">
	<h1>Our Mailing List</h1>
	<?php $dbConnection = mysql_connect($host, $username, $password);

		if (!$dbConnection) {
			die("Could not connect to the database");
		}
		mysql_select_db($database);

		$sqlQuery = "SELECT * FROM mailingList";

		$result = mysql_query($sqlQuery);

		$rowCount = mysql_num_rows($result);

		if ($rowCount == 0) {
			echo "No rows";
		} else {
			echo "<table>";
			echo "<thead>";
			echo "<tr><th>FullName</th> <th>Email:</th> <th>Username</th> <th>Phone</th>";
			echo "</thead>";

			for ($i = 0; $i < $rowCount; $i++) {

				$row = mysql_fetch_row($result);

				echo "<tr>";
				echo "<td>";
				echo $row[1];
				echo $row[2];
				echo "</td>";
				echo "<td>";
				echo $row[4];
				echo "</td>";
				echo "<td>";
				echo $row[5];
				echo "</td>";
				echo "<td>";
				echo $row[3];
				echo "</td>";

				echo "</tr>";
			}
			echo "</table>";
		}

		mysql_close($dbConnection);
	?>

	<?php
	//echo $error;
	include ("footer.php");
?>
</html>
