<?php 
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 
$host= 'localhost:8080';
$bd= 'teste';
$senhabd= '';
 
$userbd = $bd; 
 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
 
$query = "INSERT INTO `teste` ( `nome` , `ip` , `data` , `id` ) 
VALUES ('$nome', '$email', '$sexo', '$ddd')";
 
mysql_query($query,$conexao);
 
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 



