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
						Avoid re-writing  particular task over and over.
					</li>
					</br>
					<li>
						Functions are either void which return nothing or only return one value.
					</li>
					</br>
					<li>
						When we access the variable by its refrence we gaing access to it but only by its </br>
						refrence but when we access variable by name we directly get access to that variable value
					</li>
					</br>
					<li>
						Life span and accessibility of variable inside or outside of the fcuntion each variable have scope of its own function </br>
						variables that are declared inside a specific function will not be visiable to other function unless it is global variable
					</li>
					</br>
					<li>
						By using keywords of inlcude, include_once or require
					</li>
					</br>
					<li>
						Objects will give access to other class public variable but</br>
						function have access to the globale variable within the class whether they are private or public.
					</li>
					</br>
					<li>
						$example = new ExampleClass();

					</li>
					</br>
					<li>
						extends , example : </br>
						class College {</br>
						**method and stuff here**</br>
						}</br>
						class ClassRoom extends College {</br>
						**method and stuff here**</br>
						}

					</li>
					</br>
					<li>
						The moment we create object of the class we call the constructor of the class </br>
						$example = new ExampleClass(); this will cal the constructor automaticly
					</li>
					<li>
						In case the property we are trying to access has not being declared
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