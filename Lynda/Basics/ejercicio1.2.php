<?php

$numeros = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

?>


<html>

<body>

<?php

echo "<table border='1'>";

	foreach ($numeros as $v) {
		echo $v;
	}

	echo "<br />";

	for ($i = 0; $i <= count($numeros)-1; $i++){
		echo $i;
	}

echo "</table>";


?>

</body>

</html>