<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Consultar Cliente</title>
	<link href="forms.css" rel="stylesheet"/>
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>
<div class="header"><h1>Consultar Cliente</h1></div>

<div class="formulario">
  <form method="get" action="consulta_cliente.php" name="consulta" onSubmit="return validacodigo()">
    <p><label for="codigo">Código do cliente:</label> <input type="number" id="codigo" name="codigo" min="1" value="1"></p>
		<p id="codeerror" style="color: red; display: none; padding: 8px 0 8px 0;">Código inválido.</p>
    <input type="submit" name="consultar" value="Consultar" class="botao">
	</form>
</div><br>
<a href="/" class="link">Voltar</a>

</body>
</html>
