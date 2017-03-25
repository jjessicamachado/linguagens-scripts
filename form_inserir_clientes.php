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
<form method="post" name="insere" action="insere_cliente.php" onsubmit="return validacao()">

<p><label for="fname">Nome:</label> <input type="text" name="fname" id="fname" maxlength="50" autofocus>
<span id="nomeerror" style="color: red; display: none; padding: 8px 0 8px 0;">Por favor, insira o nome.</span></p>

<p><label for="femail">Email:</label> <input type="email" name="femail" id="femail" maxlength="40">
<span id="emailerror" style="color: red; display: none; padding: 8px 0 8px 0;">Por favor, insira o e-mail.</span></p>

<input type="submit" value="Enviar" class="botao">
</div>
<br>
<a href="/" class="link">Voltar</a>
</div>

</body>
</html>
