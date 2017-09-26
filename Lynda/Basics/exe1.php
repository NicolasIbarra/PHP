<html>

<body>
	<h3>Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line</h3>
<?php

for ($i = 1; $i <=10; $i++){
	if($i <10){
		echo "$i" . "-";
	} else {
		echo "$i";
	}
}
?>

	<h3>Create a script using a for loop to add all the integers between 0 and 30 and display the total.</h3>

	<?php

	$sum=0;

	for ($x = 0; $x <=30; $x++){
		$sum += $x;
	}

	echo $sum;

	?>
</body>

</html>