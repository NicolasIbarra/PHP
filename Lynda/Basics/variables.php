
<html>

<div>

	<h3>Variables con distinta capitalización</h3>
	<?php

	$item = 4;
	$Item = 6;
	$ITEM = 9;

	print($item+$ITEM);
	echo "<br />";
	print($ITEM+$ITEM);
	?>

</div>

<div>
	<hr>
	<p>PHP tiene unas <b>variables especiales</b> que se escriben con <u>underscore</u></p>
	<p>Las veremos más adelante</p>
	
	<?php
	// Variables Especiales (Underscore)

	?>

</div>

<div>
	<hr>
	<h2>String Functions</h2>
	
	<?php

	$first = "The quick brown bat";
	$second = "jumped over the lazy dog";


//// AQUÍ ESTOY CONCATENANDO DOS VARIABLES
	$third = $first . " " . $second;
	print($third);
	?>

</div>

<div>
	<hr>
	<h2>Arrays</h2>
	
	<?php

	$numbers = array(4,7,4,34,32);

	print($numbers[0]);
	echo "<br />";
	print($numbers[3]);

	?>
	<div>
		<?php  

		$mixed = array("hello", 1, 3.454, array('x','y','z'));

		?>

		<pre>
		<?php
			print_r($mixed);
			$mixed[2] = "dog";
			$mixed[] = "google";
			$mixed[] = "facebook";
			print_r($mixed);
		?>
		</pre>
	</div>

</div>

<div>
	<hr>
	<h2>Associative Arrays</h2>
	<p>The difference between a <b>regular array</b> and an <b>associative array</b> is that the latter is <b>object-indexed</b>.</p>
	<p>Opera con lo que llamamos el KEY => VALUE Pair</p>
	
	<?php

	$assoc = array(
					"first_name" => "Nico",
					"last_name" => "Pavez",
					"age" => 32,
					"email" => 'nico@gmail.com',
	);

	print($assoc['last_name'] . " " . $assoc['first_name']);

	///// ASÍ SE HACE PUSH A UN ASSOCIATIVE ARRAY
	$assoc["first_name"] = "Jon";

	echo "<br />";
	print($assoc['last_name'] . " " . $assoc['first_name']);
	
	?>

</div>

<div>
	<hr>
	<h2>Array Functions</h2>
	<p>There are some functions that work on the arrays. There are a lot of them so I should check on the PHP manual.</p>
	
	<? $numbers = array(32,54,3,7,15,48,102); ?>

	<p>Sort values: </p><?php sort($numbers); print_R($numbers); ?>
	<p>Reverse Sort values: </p><?php rsort($numbers); print_R($numbers); ?>

	<p>Max Value: </p><?php echo max($numbers); ?>
	<p>Min Value: </p><?php echo min($numbers); ?>
	<p>Implode: <?php echo $num_string = implode(', ', $numbers); ?>

</div>