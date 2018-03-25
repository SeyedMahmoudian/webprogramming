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
				<ol type="i">
					<li>
						Numeric array have numeric index and values stored in linear fashion versus Associative array</br>
						indexs are string and values stores with key values rather than in a strict linear index order.
					</li>
					</br>
					<li>
						Store multiply different values with same type into one place.
					</li>
					</br>
					<li>
						Each return the current key and value pair from an array and advance the array cursor</br>
						versus foreach iterate over all the element and return all of them.
					</li>
					</br>
					<li>
						Use keyword array within an array:</br>
						$course=array('Web Programming' => array('Labs'=>array ('1','2','3'),'Assignment'=>array('1','2','3'))),</br>
						('Java' => array('Exams','Midterms'));
					</li>
					</br>
					<li>
						Simply by using function count(); </br>
						echo count($calender);
					</li>
					</br>
					<li>
						To split strings and place them into an array
					</li>
					</br>
					<li>
						Simply by using function reset();</br>
						reset($calender);
					</li>

				</ol>
			</div>
		</div>
	</body>
	<div id = "footer">
		<?php
require "footer.php"
?>
	</div>
</html>
