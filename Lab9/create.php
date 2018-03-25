<?php session_start();

require "connection.php";

$firstName = $lastName = $tel = $email = $insurance = $userPassword = "";

$error = "";

if (!isset($_POST["firstName"]) || !isset($_POST["lastName"]) || !isset($_POST["email"]) || !isset($_POST["tel"]) || !isset($_POST["insurance"]) || !isset($_POST["userPassword"])) {
	$error = "Please fill up the form";
} else {
	if ($_POST["firstName"] != "" && $_POST["lastName"] != "" && $_POST["email"] != "" && $_POST["tel"] != "" && $_POST["insurance"] != "" && $_POST["userPassword"] != "") {

		$dbConnection = mysql_connect($host, $username, $password);

		if (!$dbConnection) {
			die("Could not connect to database....try again");
		}
		mysql_select_db($database);

		$firstName = strip_tags($firstName);
		$firstName = stripslashes($firstName);
		$firstName = mysql_real_escape_string($firstName);

		$lastName = strip_tags($lastName);
		$lastName = stripcslashes($lastName);
		$lastName = mysql_real_escape_string($lastName);

		$tel = strip_tags($tel);
		$tel = stripcslashes($tel);
		$tel = mysql_real_escape_string($tel);

		$email = strip_tags($email);
		$email = stripcslashes($email);
		$email = mysql_real_escape_string($email);

		$insurance = strip_tags($insurance);
		$insurance = stripcslashes($insurance);
		$insurance = mysql_real_escape_string($insurance);

		$userPassword = strip_tags($userPassword);
		$userPassword = stripcslashes($userPassword);
		$userPassword = mysql_real_escape_string($userPassword);

		$sqlQuery = "INSERT INTO person (Email,Firstname,LastName,Password,SIN,Tel) 
			         VALUES('" . $_POST["email"] . "','" . $_POST["firstName"] . "','" . $_POST["lastName"] . "','" . $_POST["userPassword"] . "','" . $_POST["insurance"] . "','" . $_POST["tel"] . "')";

		if (mysql_query($sqlQuery))
			$error = "Person Successfully Added";
		else
			$error = "Error adding" . mysql_error();
		// echo $sqlQuery;
		mysql_close($dbConnection);

	} else
		$error = "PLEASE ENTER FULL INFORMATION";

}
?>
<html>
	<head>
		<style>
			a:link {
				color: black;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>Input</title>
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

	<div id ="body">
		<div id ="content">
			<form action="create.php" method="post">
				First Name:
				<input type="text" name="firstName" maxlength="50"/>
				<br />
				Last Name :
				<input type="text" name="lastName" maxlength="50"/>
				<br />
				Telephone :
				<input type="tel" name="tel" maxlength="20"/>
				<br/>
				Email :
				<input type="email" name="email" maxlength="255"/>
				<br />
				Social Insurance Number :
				<input type="text" name="insurance" maxlength="11" />
				<br/>
				Password:
				<input type="password" name="userPassword" maxlength="50" />
				<br />
				<input type="submit" value="Create" />
			</form>
			<br />
			<br />
			<?php
			echo $error;
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