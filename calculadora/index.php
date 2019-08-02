<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>

	<form action="procesar.php" method="POST">
		
		<label>Valor 1</label>
		<p></p>
		<input type="text" name="val1" id="val1">
		<p></p>
		<label>Valor 2</label>
		<p></p>
		<input type="text" name="val2" id="val2">
		<p></p>
		<select name="opcion" id="opcion">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplica">Multiplica</option>
			<option value="divide">Divide</option>
		</select>
		<p></p>
		<button type="">Calcular</button>


	</form>

</body>
</html>