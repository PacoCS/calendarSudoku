<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	table{
		width: 450px;
		height: 450px;
		border-spacing: 0px;
		text-align: center;
		
	}

	.borde_rigth{
		border-right-color: red;
		border-width: 3px;
	}

	.borde_top{
		border-top-color: red;
		border-width: 3px;
	}	
	
</style>

	<title>Sudoku</title>
	<?php
	$matriz =[[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9]];
	$randomFilaNum = "";
	$randomColumNum= "";
	$randomNumber = "";
	$contadorFila = 0;
	$contadorCasilla = 0;



	


	echo "<table border=1>";
	
	foreach ($matriz as $fila) {

		echo "<tr>";

		$contadorFila += 1;

		foreach ($fila as $casilla) {
			$contadorCasilla +=1;
			if ($contadorCasilla == 3 || $contadorCasilla == 6){
				echo "<td class='borde_rigth' borde=1>".$casilla."</td>";
			}else if ($contadorFila == 4 || $contadorFila == 7){
				echo "<td class='borde_top' borde=1>".$casilla."</td>";
			}else{
				echo "<td>".$casilla."</td>";
			}	
		}
		$contadorCasilla = 0;
		echo "</tr>";
	}
	echo "</table>";

	?>
</head>
<body>

</body>
</html>