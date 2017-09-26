<?php

$array = array(3,4,5,6,7,8,9,10,11,12,13,14,15);

?>

<html>


<body>
	<h3>Poner los elementos del array en una tabla de máximo 3 columnas. El número de filas depende de cuantos elementos hayan dentro del array. Si quedan elementos fuera, simplemente quedan celdas en blanco.</h3>

	<table>
		<?php
			$countArray = count($array);
			echo "There are " . $countArray . " elements in the array<br />";

			$count = 0;

			echo "<tr>";
			
			if($count==0){
				for ($i = 0; $i <= 2; $i++) {
					echo "<td>$array[$i]</td>";
					}
				$count += 3;
			}

			echo "</tr>";

			echo "<tr>";
			if($count==3){
				for ($i = 3; $i <= 5; $i++) {
					echo "<td>$array[$i]</td>";
					}
				$count += 3;
			}
			echo "</tr>";

			echo "<tr>";
			if($count==6){
				for ($i = 9; $i <= 11; $i++) {
					echo "<td>$array[$i]</td>";
					}
				$count += 3;
			}
			echo "</tr>";

			echo "<tr>";
			if($count==9){
				for ($i = 12; $i <= $countArray; $i++) {
					echo "<td>$array[$i]</td>";
					}
				$count += 3;
			}
			echo "</tr>";

		?>
	</table>


</body>

</html>