<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM livraria WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
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
                </li>   
            </ul>
        </div>
        <br>
    </head>
	<body>
	<div class="container theme-showcase" role="main">
        <div class="page-header">
			<h1>Editar Usuário</h1>
			<hr>
				<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
				<form method="POST" action="processao.php">
					<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
					
					<label>Titulo: </label>
					<input type="text" name="titulo" placeholder="Digite o titulo completo" value="<?php echo $row_usuario['titulo']; ?>"><br><br>
					
					<label>Categoria: </label>
					<input type="text" name="categoria" placeholder="Digite a nova categoria" value="<?php echo $row_usuario['categoria']; ?>"><br><br>

					<label>Editora: </label>
					<input type="text" name="editora" placeholder="Digite a nova editora" value="<?php echo $row_usuario['editora']; ?>"><br><br>

					<label>Autor: </label>
					<input type="text" name="autor" placeholder="Digite o novo autor" value="<?php echo $row_usuario['autor']; ?>"><br><br>

					<label>Edição: </label>
					<input type="text" name="edicao" placeholder="Digite a nova edição" value="<?php echo $row_usuario['edicao']; ?>"><br><br>

					<label>Ano de Criação: </label>
					<input type="text" name="ano" placeholder="Digite o novo ano" value="<?php echo $row_usuario['ano']; ?>"><br><br>

					<label>Numero de Paginas: </label>
					<input type="text" name="num_paginas" placeholder="Digite a nova quantidade de paginas" value="<?php echo $row_usuario['num_paginas']; ?>"><br><br>

					<label>Sinopse: </label>
					<input type="text" name="sinopse" placeholder="Digite a nova Sinopse" value="<?php echo $row_usuario['sinopse']; ?>"><br><br>
					
					<input type="submit" value="Editar">
		</form>
</div>
	</body>
</html>