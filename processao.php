<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$edicao = filter_input(INPUT_POST, 'edicao', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
$num_paginas = filter_input(INPUT_POST, 'num_paginas', FILTER_SANITIZE_STRING);
$sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE livraria SET titulo='$titulo', categoria='$categoria', editora='$editora', autor='$autor', edicao='$edicao', ano='$ano', num_paginas='$num_paginas', sinopse='$sinopse', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: livros2.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: livros2.php?id=$id");
}
