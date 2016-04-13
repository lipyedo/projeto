<?php include('conexao.php');

// A classe PDO prepara o comando a ser executado
$prepara = $conexao_pdo->prepare('SELECT * FROM usuarios');

// A classe PDO executa o comando
$prepara->execute();
$total = $prepara->rowCount();
?>


<h1>Listando dados tabela com PDO</h1>


<table border="1">
<tr>
<th>Nome</th><th>Email</th><th>Usuario</th><th>Senha</th><th>Alterar</th><th>Deletar</th>
</tr>


<?php
// Laço para exibir todas as linhas
while ( $linha = $prepara->fetch() ) {
	echo '<tr><td>' . $linha['nome'] .'</td>';
	echo '<td>' . $linha['email']. '</td>';
	echo '<td>' . $linha['usuario']. '</td>';
	echo '<td>' . $linha['senha']. '</td>';
	echo '<td>Alterar</td><td>Deletar</td></tr>';
}

?>
</table><br />
<?php echo "Total: " . $total; ?>