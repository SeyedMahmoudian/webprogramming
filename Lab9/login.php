<?php session_start();
require "connection.php";

$email = $userPassword = "";

$error = "";

if (!isset($_POST["email"]) || !isset($_POST["userPassword"])) {
	$error = "All filed must be completed to login";
} else {
	if ($_POST["email"] != "" && $_POST["userPassword"] != "") {
			
		$dbConnection = mysql_connect($host, $username, $password);

		if (!$dbConnection) {
			die("Could not connect to database...try again");
		}
	}

	$email = strip_tags($email);
	$email = stripcslashes($email);
	$email = mysql_real_escape_string($email);
	$_SESSION["email"] = $_POST["email"];
	header("Location:view.php");

	$password = strip_tags($userPassword);
	$password = stripcslashes($userPassword);
	$password = mysql_real_escape_string($userPassword);
	$_SESSION["userPassword"] = $_POST["userPassword"];
	header("Location:view.php");

	login($email, $password, $db);

	function login($email, $userPassword, $db) {
		$sql = "SELECT*FROM person WHERE Email='$email' AND Password='$userPassword'";
		$result = mysql_query($sql);
		$counter = mysql_num_rows($result);
		//took some help from internet page http://www.phpeasystep.com/phptu/6.html

		if ($counter == 1) {

			header("Location: view.php");
		} else {
			echo "Wrong email and password redirecting....";
			header("Location : create.php");
		}
	}

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

	<div id="body">
		<div id="content">
			<form action="login.php" method="post">

				Email:
				<input type="text" name="email" />
				<br/>
				Password :
				<input type="password" name="userPassword">
				<br/>
				<input type="submit" value="Login" />
				<a href="create.php">Create New Account</a>
				<a href="logout.php">LogOut</a>
				<br/>
				</button>
				<?php
				echo $error;
				?>
			</form>
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