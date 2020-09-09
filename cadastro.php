<?php
    session_start();  
    include("conexao.php");

?>
<!DOCTYPE html>
<html>
    <head>
            <title>Pagina Inicial</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
            #menu a {
                color: #FFF;
                background-color: #252525;
                text-decoration: none;
                border-bottom: transparent solid 1px;
                padding-bottom: 5px;
            }

            #menu a:hover {
                color: #FFF;
                background-color: #252525;
                border-bottom: #00ff00 solid 1px;
            }

            .jumbotron.header{
                background-color: blue; 
                color: white; 
                background-image: linear-gradient(blue, #00008B);
            }
        </style>

        <div class="jumbotron header text-center">
            <h1>Livraria do Lucas</h1>
            <p>Seja Bem Vindo Administrador</p> 
        </div>
        <div id="menu text-center">
            <ul class="nav ml-4">
                <li class="nav-item">
                <a href="index.php" class="btn btn-primary" role="button">Logout</a>
                <a href="livros2.php" class="btn btn-primary" role="button">Gerenciamento de Livros</a>
                </li>   
            </ul>
        </div>
        <br>
    </head>

    <body>
        <h1 class="text-center">Cadastrar Livros</h1>
        <br>
        <form method="POST" action="processa.php" enctype="multipart/form-data">
            <div class="container">
                <input type="number" class="form-control" name="id_livro" value="" hidden>
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control" name="titulo" value="">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="">
                </div>   
                <div class="form-group">
                    <label for="editora">Editora:</label>
                    <input type="text" class="form-control" name="editora" value="">
                </div> 
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" class="form-control" name="autor" value="">
                </div> 
                <div class="form-group">
                    <label for="edicao">Ediçao:</label>
                    <input type="text" class="form-control" name="edicao" value="">
                </div> 
                <div class="form-group">
                    <label for="ano">Ano de Criação:</label>
                    <input type="text" class="form-control" name="ano" value="">
                </div> 
                <div class="form-group">
                    <label for="num_paginas">Numero de Paginas:</label>
                    <input type="text" class="form-control" name="num_paginas" value="">
                </div>     
                <div class="form-group">
                    <label for="descricao">Sinopse:</label>
                    <textarea class="form-control" rows="5" name="sinopse"></textarea>
                </div>   
                Imagem: <input name="imagem" type="file"><br><br>
                  
                <input type="submit" value="cadastrar">
                <?php
                    if(isset($_SESSION['msg']))
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                ?>
            </div>
        </form>
        <br>
    </body>

</html>
 