<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>Question 4</title>
	</head>

	<div id="h1">
		<?php
		require "header.php";
		?>
	</div>
	<td background=""><tr></tr></td>
	<div id="menu">
		<?php
require "menu.php"
		?>
	</div>

	<body>
		<div id="body">
			<div id="content">
				<!---PHP CODE START HERE --->
				<?php

				$string = "This is a test";
				$upper = strtoupper($string);
				echo $upper;
				echo nl2br("\n");
				echo nl2br("\n");
				$lower = strtolower($string);
				echo $lower;
				echo nl2br("\n");
				echo nl2br("\n");
				$strlen = strlen($string);
				echo $strlen;
				echo nl2br("\n");
				echo nl2br("\n");
				$strSplit = str_split($string);
				
				print_r($strSplit);
				echo nl2br("\n");
				echo nl2br("\n");
				
				
				$input="of the emergency broadcast system.";
				//print_r(explode('""', $input));
				$pieces=explode(" ", $input);
				foreach ($pieces as $key => $value) {
					echo "$value";
				}
				echo nl2br("\n");
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