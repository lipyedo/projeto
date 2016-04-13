<?php

			
        if (!empty($_POST)){

        include 'conexao.php';

	$inserir = $conexao_pdo->prepare('INSERT INTO clientes VALUES(DEFAULT, :nome, :endereco, :telefone, :marca, :modelo, :placa)');
	
        if($inserir->execute(array(
           ':nome' => $_POST[nome],
		   ':endereco' => $_POST[endereco],
           ':telefone' => $_POST[telefone],
           ':marca' => $_POST[marca],
		   ':modelo' => $_POST[modelo],
		   ':placa' => $_POST[placa],
           
        ))){
            die('Usuário cadastrado');
             
           }else{
           var_dump($inserir->errorCode());
           die;
         }        
}				
?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Cadastro</title>
  
  <link rel="stylesheet" href="estilo.css" />
</head>
<body>
<h1>CADASTRAR CLIENTES</h1></br>


	<div id="cadastro" align="center">
	<form name="meuForm" method="post" id="formulario"> 
	<div class="box"> 
	<label> 
	<span>Nome Completo</span> 
	<input type="text" class="input_text" name="nome" id="name"/> 
	</label>
	
	<label> 
	<span>Email</span> 
	<input type="text" class="input_text" name="email" id="email"/> 
	</label>
	
	<label> 
	<span>Usuário</span> 
	<input type="text" class="input_text" name="assunto" id="subject"/> 
	</label> 
	
	<label> <span>Senha</span> 
	<input type="senha" class="input_text" name="feedback" id="subject"/>
	<input type="button" class="button" value="Enviar" /> 
	<input type="button" class="button" value="Cancelar" /> 
	
	</label> 
	</div> 
	</form> 


				</a>
			</td>
			</tr>	
		</table>
	</form>
</div>




</body>
</html>					