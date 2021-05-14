<?php
session_start();

require_once '../Conexao/conexao.php';

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$email - $senha";
	if((!empty($email)) AND (!empty($senha))){
		//Gerar a senha criptografa
		echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT * FROM hpt_usr WHERE email_usr='$email' LIMIT 1";
		$resultado_usuario = mysqli_query($con, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if($senha == $row_usuario['pass_usr'] & $row_usuario['tipo_usr'] == 1 ){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome_usr'];
				$_SESSION['email'] = $row_usuario['email_usr'];
				$_SESSION['tipousr'] = $row_usuario['tipo_usr'];
				$_SESSION['dtnasc'] = $row_usuario['dtnasc_usr'];
				$_SESSION['cpf_usr'] = $row_usuario['cpf_usr'];
				header("Location: administrativo.php");
			}else{
				if($senha == $row_usuario['pass_usr']){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome_usr'];
				$_SESSION['email'] = $row_usuario['email_usr'];
				$_SESSION['tipousr'] = $row_usuario['tipo_usr'];
				$_SESSION['dtnasc'] = $row_usuario['dtnasc_usr'];
				$_SESSION['cpf_usr'] = $row_usuario['cpf_usr'];
				header("Location: index.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto1!";
				header("Location: login.php");
			
			}
			}
			
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto 2!";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login.php");
}
?>