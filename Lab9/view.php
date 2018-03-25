<?php
require "connection.php";
session_start();

			if (!(isset($_SESSION['email'])) && !(isset($_SESSION['userPassword']))) {	
				header("Location:create.php");
			}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<style>
			a:link {
				color: black;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>ViewAllAccounts</title>
	</head>

	<div id="h1">
		<!---php-->
		<?php
		require "header.php";
		?>
		<!---php-->
	</div>

	<div id="menu">
		<!---php-->
		<?php
require "menu.php"
		?>
		<!---php-->
	</div>
	<div id="body">
		<div id="content">
			<a href="logout.php">LogOut</a>
			<?php
			
			$dbConnection = mysql_connect($host, $username, $password);

			if (!$dbConnection) {
				die("Could not connect to the database");
			}
			mysql_select_db($database);

			$sqlQuery = "SELECT * FROM person";

			$result = mysql_query($sqlQuery);

			$rowCount = mysql_num_rows($result);

			if ($rowCount == 0) {
				echo "No rows";
			} else {
					echo "<table>";
					 echo "<thead>";
					 echo "<tr><td>First Name:</td> <td>Last Name:</td> <td>Email:</td> <td>TEL:</td> <td>SIN:</td> <td>Password:</td></tr>";
					 echo "</thead>";
				
				for ($i = 0; $i < $rowCount; $i++) {
                     
					$row = mysql_fetch_row($result);
					
					echo "<tr>";
					echo "<td>";
					echo $row[1] , $row[2];
					echo "</td>";
					// echo "<td>";
					// echo $row[2];
					// echo "</td>";
					echo "<td>";
					echo $row[3];
					echo "</td>";
					echo "<td>";
					echo $row[4];
					echo "</td>";
					echo "<td>";
					echo $row[5];
					echo "</td>";
					echo "<td>";
					echo $row[6];
					echo "</td>";
	
						echo "</tr>";
				}
				echo "</table>";
			}

			mysql_close($dbConnection);
			?>
		</div>
	</div>

	<div id = "footer">

		<!---PHP --->
		<?php
require "footer.php"
		?>
		<!---PHP --->
	</div>

</html>