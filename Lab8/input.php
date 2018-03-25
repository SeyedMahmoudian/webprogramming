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

	<!---PHP --->
	<?php $firstName = $lastName = $tel = $game = $position = "";

		if (isset($_POST["firstName"]) || isset($_POST["lastName"]) || isset($_POST["tel"]) || isset($_POST["position"]) || isset($_POST["game"])) {
			$firstName = strip_tags($firstName);
			$firstName = stripslashes($firstName);
			$firstName = mysql_real_escape_string($firstName);
			$firstName = $_POST["firstName"];

			$lastName = strip_tags($lastName);
			$lastName = stripcslashes($lastName);
			$lastName = mysql_real_escape_string($lastName);
			$lastName = $_POST["lastName"];

			$tel = strip_tags($tel);
			$tel = stripcslashes($tel);
			$tel = mysql_real_escape_string($tel);
			$tel = $_POST["tel"];

			$game = $_POST["game"];

			$position = $_POST["position"];

		}
	?>
	<div id ="body">
		<div id="content">
			<!---PHP --->
			<table>
				<td>
				<form method="post">
					What is your name?
					<input type="text" name="firstName" value="<?php echo $name; ?>">
					<br />
					What is your last name?
					<input type="text" name="lastName" value="<?php echo $lastName; ?>">
					<br />
					What is your telephone Number?
					<input type="tel" name="tel" value="<?php echo $tel?>">
					</br>

					<input type="radio" name="position"  <?php
					if (isset($position) && $position == "Staff")
						echo "checked";
					?>
					value="Staff">
					Staff
					</br>
					<input type="radio" name="position"

					<?php
					if (isset($position) && $position == "Student")
						echo "checked";
					?>
					value ="Student">
					Student
					</br>
					<input type="radio" name="position"
					<?php
					if (isset($position) && $position == "Faculty")
						echo "checked";
					?>
					value="Faculty">
					Faculty

					</br>
					<select size="4" multiple="multiple" name="game[]">
						<option value="Game 1">Game 1 </option>
						<option value="Game 2">Game 2</option>
						<option value="Game 3">Game 3</option>
						<option value="Game 4">Game 4</option>
					</select>
					</br>
					<input type="submit" name="submit" />
				</form></td>
				<!---PHP --->

				<td align="right">
				<?php
				echo "<h3>Your inputs:</h3>";
				echo "First name :" . $firstName;
				echo "</br>";
				echo "Last name: " . $lastName;
				echo "</br>";
				echo "Phone number: " . $tel;
				echo "</br>";
				echo "Position: " . $position;
				echo "</br>";
				echo "Games:";
				echo "</br>";
				foreach ($game as $value) {
					echo "$value";
					echo "</br>";
				}
				echo "</br>";
				?>
				<!---PHP ---></td>

			</table>
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