<html>
	<style>
			a:link {
				color: black;
			}
		</style>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>Session 2</title>
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
	</div>
	<!---php-->
	<div id ="body">
		<div id="content">
			<?php

			session_start();

			if (isset($_SESSION["firstName"])) {
				echo "First name :  " . $_SESSION["firstName"];
				echo "<br />";
			}
			if (isset($_SESSION["lastName"])) {

				echo "Last Name:" . $_SESSION["lastName"];
				echo "<br />";

			}
			if (isset($_SESSION["tel"])) {
				echo "tel:" . $_SESSION["tel"];
				echo "<br />";
			}
			if (isset($_SESSION["position"])) {
				echo "position:" . $_SESSION["position"];
				echo "<br />";
			}
			
				
			if (isset($_SESSION["game"])) {
				echo "game:" . $_SESSION["game"];
				echo "<br />";
			 }
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