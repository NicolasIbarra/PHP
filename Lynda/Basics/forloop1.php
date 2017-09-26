<?php

$num = array(1,2,3);

?>

<html>

	<body style="width: 50%; margin: auto;">

		<h1>Ejercicio 1 ForLoop</h1>

		<p>El ejercicio consiste en mostrar un array determinado, y ejecutar un comando que ingrese nuevos valores al array. Estos nuevos valores deben ir después del último valor.</p>
		<p>Este es el array entregado (al que hay que agregarle valores):</p>

		<p>

		<?php print_r($num) ?>

		</p>


		<h3 style="border: 1px solid black; width: auto;">Aquí ocurre el código PHP que ingresa datos al array</h3>

			<?php

			for ($i = count($num)+1; $i <=15; $i++) {
				array_push($num, $i);
			}

			foreach ($num as $k => $v) {
				echo $k . " => " . $v . "<br />";
			}

			?>

			<p>Entonces, el primer array tenía sólo 3 valores, y con el código PHP pude incorporar 12 valores más de forma iterada utilizando for y foreach loop</p>
	</body>
</html>