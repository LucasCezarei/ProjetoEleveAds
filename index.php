<?php include_once("conexao.php");
$result_livros = "SELECT * FROM livraria";
$resultado_livros = mysqli_query($conn, $result_livros);
$row_livros = mysqli_fetch_assoc($resultado_livros);
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
                <a href="cadastro.php" class="btn btn-primary" role="button">Cadastrar Livros</a>
                </li>   
            </ul>
        </div>
        <br>
    </head>

    <body>
    <div class="container theme-showcase" role="main">
			<div class="page-header">
				<center><h1>Livros</h1></center>
                <form method="POST" action="pesquisar.php">
                    Pesquisar: <input type="text" name="pesquisar" placeholder="PESQUISAR">
                    <input type="submit" value="ENVIAR">
                </form>
			</div>
			<div class="row">
				<?php while($rows_livros = mysqli_fetch_assoc($resultado_livros)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="imagens/livro.jpg" alt="...">
							<div class="caption text-center">
                                <a href="detalhes.php?id=<?php echo $rows_livros['id']; ?>"><h3><?php echo $rows_livros['titulo']; ?></h3></a>
                            </div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
    </body> 

</html>
 