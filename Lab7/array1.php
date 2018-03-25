<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
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
			<div id="content">
				<?php

				$calender = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				print_r($calender);
				echo "<h1>" . "For Loop" . "</h1>";

				for ($i = 0; $i <= 11; $i++) {
					printf(" Month %d: %s", $i, $calender[$i]);
				}

				echo "<h1>" . "Sort Function is being applied" . "</h1>";

				sort($calender);
				print_r($calender);

				echo "<h1>" . "Foreach Loop" . "</h1>";
				$i = 0;
				foreach ($calender as $value) {
					$i++;
					printf(" Month %d: %s", $i, $value);
					echo "<br/>";

				}
				echo "<h1>" . "WHILE loop, SWITCH statement" . "</h1>";
				$i = 0;
				$j = 0;
				while ($j < 1) {
					$j++;
					$i++;
					switch ($i) {
						case 1 :
							echo " Month 1 : January has 31 days";
							echo "<br />";

						case 2 :
							echo " Month 2 : February has 28, or 29 days";
							echo "<br />";
						case 3 :
							echo " Month 3 : March has 31 days";
							echo "<br />";
						case 4 :
							echo " Month 4 : April has 30 days";
							echo "<br />";
						case 5 :
							echo " Month 5 : May has 31 days";
							echo "<br />";
						case 6 :
							echo " Month 6 : June has 30 days ";
							echo "<br />";
						case 7 :
							echo " Month 7 : July has 31 days";
							echo "<br />";
						case 8 :
							echo " Month 8 : August has 31 days";
							echo "<br />";
						case 9 :
							echo " Month 9 : September has 30 days";
							echo "<br />";
						case 10 :
							echo " Month 10 : October has 31 days";
							echo "<br />";
						case 11 :
							echo " Month 11 : November has 30 days";
							echo "<br />";
						case 12 :
							echo " Month 12 : December has 31 days";
							echo "<br />";
					}
				}
				
			?>
			</div>
		</div>
	</body>

	<div id = "footer">
		<?php
require "footer.php"
		?>
	</div>
</html>