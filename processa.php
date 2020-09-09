<?php
session_start();
include_once("conexao.php");
?>

<?php

    if(isset($_FILES['imagem']))
    {
        date_default_timezone_set("Brazil/East");

        $ext = strtolower(substr($_FILES['imagem']['name'],-4));

        $new_name = date("Y.m.d-H.i.s") . $ext;
        $dir = 'imagens/';

        move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);
    }

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$edicao = filter_input(INPUT_POST, 'edicao', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
$num_paginas = filter_input(INPUT_POST, 'num_paginas', FILTER_SANITIZE_STRING);
$imagem = $new_name;

$result_livros = "INSERT INTO livraria (titulo, sinopse, categoria, edicao, autor, editora, ano, num_paginas, imagem) VALUES ('$titulo', '$sinopse', '$categoria', '$edicao', '$autor', '$editora', '$ano', '$num_paginas', '$imagem')";
$resultado_livros = mysqli_query($conn, $result_livros);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] =  "<p style='color:green;'>Livro cadastrado com sucesso</p>";
    header("Location: livros2.php");
}
else {
    $_SESSION['msg'] =  "<p style='color:red;'>Livro não foi cadastrado com sucesso</p>";
    header("Location: livros2.php");
}

?>