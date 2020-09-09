<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "livro";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_cursos = "SELECT * FROM livraria WHERE titulo LIKE '%$pesquisar%' LIMIT 1";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Nome do titulo: ".$rows_cursos['titulo']."<br>";
        echo "Categoria: ".$rows_cursos['categoria']."<br>";
        echo "Autor: ".$rows_cursos['autor']."<br>";
        echo "Editora: ".$rows_cursos['editora']."<br>";
        echo "Quantidade de Paginas: ".$rows_cursos['num_paginas']."<br>";
        echo "Edição: ".$rows_cursos['edicao']."<br>";
        echo "Ano de Criação: ".$rows_cursos['ano']."<br>";
	}
?>