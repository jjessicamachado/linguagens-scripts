<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Inserir Cliente</title>
	<link href="forms.css" rel="stylesheet"/>
</head>
<body>
<div class="header"><h1>Inserir Cliente</h1></div>

<div class="container">

<div class="formulario">
  <form method="get" action="insere_cliente.php">
    <label for="nome" class="required">Nome:</label> <input type="text" id="nome" name="nome"><br>
    <label for="email" class="required">E-mail:</label> <input type="email" id="email" name="email"><br>
    <input type="submit" value="Enviar" class="botao">
	</form>
</div>
<a href="area_administrativa.php">Voltar</a>
</div>

<script src="validate.js"></script>
</body>
</html>
