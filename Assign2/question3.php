<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>Question 3</title>
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
				$values=array(9, 3, 1, 0, 99, 2, 5, 6, 32, 1, 55);
				computes($values);
				finder($values);
				function computes($values){
					$average = array_sum($values) / 11;
					echo "The average is:" . $average;
					
				}
				function finder($values)
				{
					$MAX=max($values);
					echo nl2br("\n");
					echo "The highest value is ".$MAX;
				}
				
				$secondArray=array(9, 18, 1, 0, 23, 22, 4, 6, 5, 32, 55);
				
				checker($values, $secondArray);
				
				function checker($values,$secondArray){
						echo nl2br("\n");
					
					$result=array_intersect_assoc($values, $secondArray);
					echo "The values at the following indexes match ";
					print_r($result);
					
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