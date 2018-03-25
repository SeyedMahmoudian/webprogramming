<?php session_start();
$firstName = $lastName = $tel = $game = $position = "";
$fError = $lError = $telError = $gameError = $pError = "";

if (isset($_POST["firstName"]) || isset($_POST["lastName"]) || isset($_POST["tel"]) || isset($_POST["position"]) || isset($_POST["game"])) {
	$firstName = strip_tags($firstName);
	$firstName = stripslashes($firstName);
	$firstName = mysql_real_escape_string($firstName);
	$_SESSION["firstName"] = $_POST["firstName"];
	header("Location: session2.php");

	$lastName = strip_tags($lastName);
	$lastName = stripcslashes($lastName);
	$lastName = mysql_real_escape_string($lastName);
	$_SESSION["lastName"] = $_POST["lastName"];
	header("Location: session2.php");

	$tel = strip_tags($tel);
	$tel = stripcslashes($tel);
	$tel = mysql_real_escape_string($tel);
	$_SESSION["tel"] = $_POST["tel"];
	header("Location: session2.php");

	$_SESSION["position"] = $_POST["position"];
	header("Location: session2.php");
	$_SESSION["game"] = $_POST["game"];
	header("Location: session2.php");

	exit ;

} else {
	$fError = "First Name was not set";
	$lError = "Last Name was not set";
	$telError = "Telephone number was not set";

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
		<title>Session 1</title>
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
		<div id="content">
			<form method="post">
				What is your name?
				<input type="text" name="firstName" value="" />
				<br />
				What is your last name?
				<input type="text" name="lastName" value=""/>
				<br />
				What is your telephone Number?
				<input type="tel" name="tel" value="">
				</br>
				<input type="radio" name="position" value="Staff">
				Staff
				</br>
				<input type="radio" name="position"
				value ="Student">
				Student
				</br>
				<input type="radio" name="position"
				value="Faculty">
				Faculty

				</br>
				<select size="4" multiple="multiple" name="game">
					<option value="Game 1">Game 1 </option>
					<option value="Game 2">Game 2</option>
					<option value="Game 3">Game 3</option>
					<option value="Game 4">Game 4</option>
				</select>
				<input type="submit" />
			</form>
			</body>
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