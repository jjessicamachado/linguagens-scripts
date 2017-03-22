<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Inserir Cliente</title>
	<link href="forms.css" rel="stylesheet"/>
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>
<div class="header"><h1>Inserir Cliente</h1></div>

<div class="container">

<div class="formulario">
  <form method="post" action="insere_cliente.php" id="insere" name="insere">

		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" size="20">
		<span class='msg-erro msg-nome'></span><br>

    <label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<span class='msg-erro msg-email'></span><br>

    <input type="submit" value="Enviar" class="botao" name="enviar">
	</form>
</div><br>
<a href="/" class="link">Voltar</a>
</div>

</body>
</html>
