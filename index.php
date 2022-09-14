<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 10</title>
</head>
<body>
	<?php
		//FUNCIONES PERSONALIZADAS
		function calcularPerimetro($lado1,$lado2)
		{
			//Calcular
			$per = 2 * ($lado1 + $lado2);
			//Retornar el valor resultante
			return $per;
		}

		function calcularArea($lado1,$lado2)
		{
			//Calcular
			$a = $lado1 * $lado2;

			//Retornar el resultado
			return $a;
		}

		function esCuadrado($lado1,$lado2)
		{
			if($lado1==$lado2)
			{
				$rpta = "SI";
			}
			else
			{
				$rpta = "NO";
			}

			return $rpta;
		}

	?>

	<h1>Figura Rectangular - Funciones: Incorporadas y Personalizadas</h1>
	<p>A partir del ingreso de los lados de una figura rectangular
	calcular: el perimetro, el area y si es un cuadrado.</p>

	<p>Tambien calcular la Diagonal</p>

	<?php
		//ENTRADA

		//Recibir valores del Formulario
		if(isset($_GET["txtLargo"]))
		{
			//Leer los valores
			$largo = $_GET["txtLargo"];
			$ancho = $_GET["txtAncho"];
		}else{
			//Asignar valores predeterminados
			$largo = 0;
			$ancho = 0;
		}

		//PROCESAMIENTO 

		//Calcular Perimetro
		$perimetro = calcularPerimetro($largo,$ancho);

		//Calcular Area
		$area = calcularArea($largo,$ancho);

		//Cuadrado
		$cuadrado = esCuadrado($largo,$ancho);

		//Calcular la diagonal (utilizar FUNCIONES INCORPORADAS)
		//Raiz Cuadrada: sqrt()
		//Potencia: pow(base, exponente)

		$diagonal = sqrt(pow($largo,2)+pow($ancho,2));


	?>

	<form>
		<table>
			<tr>
				<td>Largo:</td>
				<td><input type="text" name="txtLargo" value="<?php echo $largo ?>"></td>
			</tr>
			<tr>
				<td>Ancho</td>
				<td><input type="text" name="txtAncho" value="<?php echo $ancho ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Procesar"></td>
			</tr>

			<tr>
				<td>Perimetro:</td>
				<td><input type="text" value="<?php echo $perimetro ?>"></td>
			</tr>

			<tr>
				<td>Area:</td>
				<td><input type="text" value="<?php echo $area ?>"></td>
			</tr>

			<tr>
				<td>Cuadrado:</td>
				<td><input type="text" value="<?php echo $cuadrado ?>"></td>
			</tr>
			<tr>
				<td>Diagonal:</td>
				<td><input type="text" value="<?php echo $diagonal ?>"></td>
			</tr>
		</table>		
	</form>
</body>
</html>