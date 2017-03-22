<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="ISO-8859-1"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Consultar Cliente</title>
	<link href="forms.css" rel="stylesheet"/>
	<script src="validation.js"></script>
</head>
<body>
<div class="header"><h1>Consultar Cliente</h1></div>

<div class="container">
  <div class="formulario">
<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "lapasta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$codigo = $_GET['codigo'];
$sql = "SELECT * FROM clientes WHERE cod_cliente=$codigo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Código do cliente: " . $row["cod_cliente"]. "<br>" . "Nome: " . $row["nome_cliente"]. "<br>". "E-mail: " . $row["email_cliente"];
    }
} else {
    echo "Não há registro.";
}

$conn->close();
?></div>
<br>
<a href="form_consultar_cliente.php" class="link">Fazer nova consulta</a></div>
</body>
</html>
