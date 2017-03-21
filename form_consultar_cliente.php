<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Consultar Cliente</title>
	<link href="forms.css" rel="stylesheet"/>
</head>
<body>
<div class="header"><h1>Consultar Cliente</h1></div>

<div class="container">

<div class="formulario">
  <form method="get" action="consulta_cliente.php">
    <label for="codigo" class="required">Código do cliente:</label> <input type="number" id="codigo" name="codigo" min="1" required><br>
    <input type="submit" value="Consultar" class="botao">
	</form>
</div>
<a href="area_administrativa.php">Voltar</a>
</div>

<script src="validate.js"></script>
</body>
</html>
