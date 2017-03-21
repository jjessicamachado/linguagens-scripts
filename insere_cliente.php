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
        echo '<div style="padding-top: 10em; font-size: 20px; background: #f7f7f7; height: 100%; width: 100%; margin: 0 auto; text-align: center;">Cadastro feito com sucesso<br>';
        echo '<br><a href="form_inserir_clientes.php">voltar para formulário de cadastro</a></div>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
    }

    mysql_close($conexao); //fecha conexão com banco de dados
?>
