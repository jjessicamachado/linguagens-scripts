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
<div class="header"><h1>Inserir Cliente</h1></div>

<div class="formulario">
  <?php
      $conexao = mysql_connect("localhost","root","usbw") //porta, usuário, senha
      or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

      $select_db = mysql_select_db("lapasta"); //seleciona o banco de dados

      //Abaixo atribuímos os valores provenientes do formulário pelo método POST
      $nome = $_POST["nome"];
      $email = $_POST["email"];

      $string_sql = "INSERT INTO clientes (cod_cliente,nome_cliente,email_cliente) VALUES (null,'$nome','$email')"; //String com consulta SQL da inserção

      mysql_query($string_sql,$conexao); //Realiza a consulta

      if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
          echo 'Cadastro feito com sucesso<br>';
          echo '<br><a href="form_inserir_clientes.php" class="link">Novo cadastro</a></div>'; //Apenas um link para retornar para o formulário de cadastro
      } else {
          echo "Erro, não possível inserir no banco de dados";
      }

      mysql_close($conexao); //fecha conexão com banco de dados
  ?>

</div><br>

</body>
</html>
