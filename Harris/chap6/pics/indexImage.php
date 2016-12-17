<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index Image</title>
</head>
<body>

<?php 

// image index
// generate an index file containing all images in a particular directory

// point to whatever directory you wish to index
// index will be written to this directory as imageIndex.html

$dirName = "./pics";
$dp = opendir($dirName);
chdir($dirName);

// add all files in directory to $theFiles array

$currentFile = "";
while ($currentFile !== false) {
	$currentFile = readDir($dp);
	$theFile[] = $currentFile;
} // end while

// extract gif and jpg images
$imageFiles = preg_grep("/jpg$|gif$/", $theFiles);

$output = <<<HERE
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Index</title>
</head>
<body>

<div>
HERE;

foreach ($imageFiles as $currentFile){
	$output .= <<<HERE
	<a href = "$currentFile"
	height = "50"
	width = "50"
	alt = "$currentFile" />
	</a>

HERE;

}

$output .= <<<HERE
</div>
</body>
</html>

HERE;

// save index to the local file system

$fp = fopen("imageIndex.html", "w");
fputs($fp, $output);
fclose($fp);
// readFile("imageIndex.html");

print <<<HERE
<p>
<a href = "$dirName/imageIndex.html">
Image Index
</a>
</p>

HERE;

?>

</body>
</html>	
</body>
</html>


?>
	
</body>
</html>