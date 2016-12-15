<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Load Sonnet</title>
		<style type="text/css">
			body {
				background-color: darkred;
				color: white;
				font-family: 'Brush Script MT', script;
				font-size: 1.5 em;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<div>
			<?php
			$fp = fopen("sonnet76.txt", "r");

			//first line is title
			$line = fgets($fp);
			print "<h1>$line</h1>\n";

			//print rest of sonnet
			while(!feof($fp)){
				$line = fgets($fp);
				print "$line <br />\n";
			} // end while loop

			fclose($fp);

			?>
		</div>
	</body>
</html>