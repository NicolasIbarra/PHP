<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Save Sonnet</title>
</head>
<body>

<?php

$sonnet76 = <<<HERE

Sonnet # 76, William Shakespeare

Why is my verse so barren of new pride,
So far from variation or quick change?
Why with the time do I not glance aside
To new-found methods, and to compounds strange?
Why write I still all one, ever the same,
And keep invention in a noted weed,
That every word doth almost tell my name,
Showing their birth.

HERE;

$fp = fopen("sonnet76.txt", "w");
fputs($fp, $sonnet76);
fclose($fp);

?>

<!--Para revisar los permisos para crear archivos ver este
instructivo: http://stackoverflow.com/questions/18140626/fopen-permission-denied-despite-having-correct-file-directory -->
	
</body>
</html>