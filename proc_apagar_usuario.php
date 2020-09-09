<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_livros = "DELETE FROM livraria WHERE id = '$id'";
	$resultado_livros = mysqli_query($conn, $result_livros);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Livro apagado com sucesso</p>";
		header("Location: livros2.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o Livro não foi apagado com sucesso</p>";
		header("Location: livros2.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um livro</p>";
	header("Location: livros2.php");
}
