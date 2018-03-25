<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>Question 1</title>
	</head>

	<div id="h1">
		<?php
		require "header.php";
		?>
	</div>

	<div id="menu">
		<?php
require "menu.php"
		?>
	</div>

	<body>
		<div id="body">
			<div id="content" align="left">
				<!---PHP CODE START HERE --->
				<?php
				for ($i = 0; $i <= 10; $i++) {
					for ($j = 10 - $i; $j >= 1; $j--) {
						echo "*";
					}
					echo "<br>";
					

				}
				?>
				</div>
				<div id="content" align="center">
				<?php 
				   $x = 0;
					while ($x <= 10) {
						$y = 10 - $x;
						echo "  ";
						while ($y >= 1) {

							echo "*";
							$y--;
						}

						echo "<br/>";
						$x++;
					}
					
				?>
				<?php
					echo nl2br("\n");
				for ($i = 0; $i <= 10; $i++) {
					for ($j = 1; $j <= 1 + $i; $j++) {
						echo "*";
					}
					echo "" . "<br/>";
				}
				for ($y = 1; $y <= 11; $y++) {
					for ($x = 1; $x <= 11 - $y; $x++) {
						echo "*";
					}
					echo "" . "<br>";
				}
				?>
				<!---PHP CODE END HERE --->
			</div>
		</div>
	</body>
	<div id = "footer">
		<?php
require "footer.php"
		?>
	</div>
</html>
