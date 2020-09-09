<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
            <title>Pagina Inicial</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		</script>
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
            div.polaroid {
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            }
            div.container {
                padding: 10px;
            }
            
        </style>

        <div class="jumbotron header text-center">
            <h1>Livraria do Lucas</h1>
            <p>Seja Bem Vindo Administrador</p> 
        </div>
        <div id="menu text-center">
            <ul class="nav ml-4">
                <li class="nav-item">
                <a href="index.php" class="btn btn-primary" role="button">Meus Livros</a>
                <a href="cadastro.php" class="btn btn-primary" role="button">Cadastrar</a>
                </li>   
            </ul>
        </div>
        <br>
    </head>
	<body>
        <div class="container theme-showcase" role="main">
        <div class="page-header">
				<center><h1>Listagem de Livros</h1></center>
                <hr>
			</div>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			
			//Receber o número da página
			$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
			$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
			
			//Setar a quantidade de itens por pagina
			$qnt_result_pg = 30;
			
			//calcular o inicio visualização
			$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
			
			$result_livros = "SELECT * FROM livraria LIMIT $inicio, $qnt_result_pg";
			$resultado_livros = mysqli_query($conn, $result_livros);
			while($row_livros = mysqli_fetch_assoc($resultado_livros)){
				echo "ID: " . $row_livros['id'] . "<br>";
                echo "Titulo: " . $row_livros['titulo'] . "<br>";
                echo "Categoria: " . $row_livros['categoria'] . "<br>";
                echo "Editor: " . $row_livros['editora'] . "<br>";
                echo "Autor: " . $row_livros['autor'] . "<br>";
                echo "Edição: " . $row_livros['edicao'] . "<br>";
                echo "Ano: " . $row_livros['ano'] . "<br>";
                echo "Numero de Paginas: " . $row_livros['num_paginas'] . "<br>";
				echo "Sinopse: " . $row_livros['sinopse'] . "<br>";
				echo "<a href='edit_livro.php?id=" . $row_livros['id'] . "'>Editar</a><br>";
				echo "<a href='proc_apagar_usuario.php?id=" . $row_livros['id'] . "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a><br><hr>";
            }

			
		?>	
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="js/personalizado.js"></script>	
</div>	
	</body>
</html>