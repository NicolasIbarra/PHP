<html>
	<head>
		<title>Remembering PHP Code</title>
	</head>

	<body>
		<h1>Remembering PHP Code</h1>

		<h2>Connecting to DataBase</h2>

		<br />
		<h3>1.- Primer Paso: Declarar variables fundamentales</h3>
		<p>Lo primero que tengo que hacer es declarar variables fundamentales para crear conexión:</p>
		<ul>
			<li><b>Host</b>: $host = 'localhost';</li>
			<li><b>DataBase Name:</b> $dbname = 'Your DataBase Name';</li>
			<li><b>Password:</b> $pass = 'Your password';</li>
			<li><b>Username:</b> $user = 'UserName';</li>
		</ul>
		<hr>
		<h3>2.- Segundo Paso: Crear variable de conexión utilizando variables fundamentales</h3>
		<p>Después tengo que crear la variable que conecta y que ejecuta la función mysqli() con sus respectivos argumentos.</p>
		<quote>$connect = mysqli_connect($host, $user, $dbname, $pass);</quote>
		<hr>
		<h3>3.- Tercer Paso: Ejecutar condicional para chequear conexión</h3>
		<p>Esta parte del código testea si la conexión se realizó con éxito o no. En caso de haber error nos indicará cuál exactamente fue el error</p>
		<p style="color: red;">if(mysqli_connect_errno()) {<br>
		Die ('DataBase Connection Failed: ' . mysqli_connect_error() . '( ' . mysqli_connect_errno() . ' )');
			<br>}<br>
		}
		</p>
		<p>Y de esta forma establecemos la conexión con la base de datos.</p>
	</body>
</html>