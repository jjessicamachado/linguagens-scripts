<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Consultar Cliente</title>
	<link href="forms.css" rel="stylesheet"/>
</head>
<body>
<div class="header"><h1>Área Administrativa</h1></div>

<div class="container">
<div class="formulario">
  <form method="post" action="entrar.php">
    <label for="funcionario" class="required">Funcionário:</label> <input type="text" id="funcionario" name="funcionario"><br>
    <label for="senha" class="required">Senha:</label> <input type="password" id="senha" name="senha"><br>
    <input type="submit" value="Entrar" class="botao">
	</form>
</div>
<a href="localhost:8080">Voltar para site</a>
</div>
<script src="validate.js"></script>
</body>
</html>
