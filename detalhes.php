 <?php include_once("conexao.php");
$id = $_GET['id'];
$result_livros = "SELECT * FROM livraria WHERE id='$id'";
$resultado_livros = mysqli_query($conn, $result_livros);
$row_livros = mysqli_fetch_assoc($resultado_livros);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detalhes Livros</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
            <p>Seja Bem Vindo</p> 
        </div>
        <div id="menu text-center">
            <ul class="nav ml-4">
                <li class="nav-item">
                <a href="index.php" class="btn btn-primary" role="button">Inicial</a>
                </li>   
            </ul>
        </div>
        <br>
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Titulo: <?php echo $row_livros['titulo']; ?></h1>
			</div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Categoria</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Editora</a></li>
				<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Autor</a></li>
				<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Edicao</a></li>
				<li role="presentation"><a href="#detalhes" aria-controls="detalhes" role="tab" data-toggle="tab">Ano</a></li>
				<li role="presentation"><a href="#tutores" aria-controls="tutores" role="tab" data-toggle="tab">Numero de Paginas</a></li>
				<li role="presentation"><a href="#sinopse" aria-controls="sinopse" role="tab" data-toggle="tab">Sinopse</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home"><br>
					<p> O genero deste livro é <?php echo $row_livros['categoria']; ?> </p>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile"><br>
					<p> A editora deste livro é <?php echo $row_livros['editora']; ?> </p>
				</div>
				<div role="tabpanel" class="tab-pane" id="messages"><br>
					<p> O autor deste livro é <?php echo $row_livros['autor']; ?> </p>
				</div>
				<div role="tabpanel" class="tab-pane" id="settings"><br>
					<p> Este livro foi editado por <?php echo $row_livros['edicao']; ?> </p>
				</div>
				<div role="tabpanel" class="tab-pane" id="detalhes"><br>
					<p> Esse livro foi lançado no ano de <?php echo $row_livros['ano']; ?> </p>
				</div>
				<div role="tabpanel" class="tab-pane" id="tutores"><br>
					<p> O numero de Paginas são: <?php echo $row_livros['num_paginas']; ?> </p>
				</div>
				<div role="tabpanel" class="tab-pane" id="sinopse"><br>
					<p><?php echo $row_livros['sinopse']; ?> </p>
				</div>
				</div>
			  </div>

			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>