<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cartoonify</title>
</head>
<body>

<div>

<?php 

$fileName = "sonnet76.txt";

$sonnet = file($fileName);
$output = "";

foreach ($sonnet as $currentLine){
	$currentLine = str_replace("r", "w", $currentLine);
	$currentLine = str_replace("l", "w", $currentLine);
	$output .= rtrim($currentLine) . "<br />\n";
} // end for each
$output .= "You wascally wabbit!<br />\n";

print $output;

?>

</div>
	
</body>
</html>