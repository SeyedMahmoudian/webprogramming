<!DOCTYPE HTML>
<html>
	<head>
		<style>
		
		</style>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
		<title>PHP and XML</title>
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
	
	<div id ="body">
		<div id="content">

			<?php

			$xml = file_get_contents("http://aminmahmoudian.com/CST8238/Lab10/Books.xml");

			$xmlDoc = new DOMDocument();

			$xmlDoc -> loadXML($xml);

			$catalog = $xmlDoc -> getElementsByTagName('catalog');

			foreach ($catalog as $current) {

				foreach ($current -> childNodes as $node) {

					if ($node -> nodeName == "author")
						echo "<h2>Author</h2>" . $node -> nodeValue;

					if ($node -> nodeName == "genre")
						echo "<h2>Genre</h2>" . $node -> nodeValue;

					if ($node -> nodeName == "price")
						echo "<h2>price</h2>" . $node -> nodeValue;

					if ($node -> nodeName == "publish_date")
						echo "<h2>Publish Date:</h2>" . $node -> nodeValue;

					if ($node -> nodeName == "description")
						echo "<h2>Descriptino</h2>" . $node -> nodeValue;

					if ($node -> nodeName == "book") {

						foreach ($node->childNodes as $nodeItem) {
							if ($nodeItem -> nodeName == 'author')
								echo "<h4>Book Author</h4>" . $nodeItem -> nodeValue;

							if ($nodeItem -> nodeName == 'title')
								echo "<h4>Book Title</h4>" . $nodeItem -> nodeValue;

							if ($nodeItem -> nodeName == 'genre')
								echo "<h4>Book Genre</h4>" . $nodeItem -> nodeValue;

							if ($nodeItem -> nodeName == 'price')
								echo "<h4>Book Price</h4>" . $nodeItem -> nodeValue;

							if ($nodeItem -> nodeName == 'description')
								echo "<h4>Book Description</h4>" . $nodeItem -> nodeValue;
						}
						echo "<hr />";
					}
				}
			}
			?>
			<!---PHP --->

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