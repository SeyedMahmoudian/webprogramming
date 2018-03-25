<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>Question 2</title>
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
			<div id="content" align="center">
				<div id="table" width=100%>
<!---PHP CODE START HERE --->
				<?php

				$row = 5;
				$column = 2;

				echo "<table border ='1' width=100% align=center>";
				for ($j = 0; $j < 1; $j++) {
					$z = -2;
					$f=-1;
					for ($i = 0; $i < 5; $i++) {
					
						$z = $z + 2;
						$f=$f+2;
						echo "<tr>";
						
						echo "<td style=background-color:#808080 align=center>".$z."</td>";
						echo "<td align=center>".$f."</td>";
						
						echo "</tr>";
					}
				}
				echo "</table>";
				?>
				<!---PHP CODE END HERE --->
				</div>
			</div>
		</div>
	</body>
	<div id = "footer">
		<?php
           require "footer.php"
		?>
	</div>
</html>