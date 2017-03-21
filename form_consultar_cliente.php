<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Consultar Cliente</title>
	<link href="forms.css" rel="stylesheet"/>
	<script src="validation.js"></script>
</head>
<body>
<div class="header"><h1>Consultar Cliente</h1></div>

<div class="container">

<div class="formulario">
  <form method="get" action="consulta_cliente.php" name="consulta">
    <label for="codigo" class="required">Código do cliente:</label> <input type="number" id="codigo" name="codigo" min="1" required><br>
    <input type="submit" value="Consultar" class="botao" onClick="return validar()">
	</form>
</div>
<a href="localhost">Voltar</a>
</div>

</body>
</html>
