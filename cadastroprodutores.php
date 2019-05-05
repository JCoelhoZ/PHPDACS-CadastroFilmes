<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Locadora</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar -->
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="card">
	<div class="card-body">
		<?php
			$id = 0;
			$produtora = "";
			$presidente = "";
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$con = mysqli_connect("localhost","bob","bob","dacs2019php");
				$stmt = "SELECT * FROM produtora WHERE idprodutora = ?";
				$stmtprep = mysqli_prepare($con, $stmt);
				mysqli_stmt_bind_param($stmtprep, "i", $id);
				mysqli_stmt_execute($stmtprep);
				$result = mysqli_stmt_get_result($stmtprep);
				while($row = $result->fetch_row()){
					$produtora = $row[1];
					$presidente = $row[2];
				}
			}
		?>
		<form action="savecliente.php" method="POST">
		<!-- Formularios -->
		<input type="hidden" class="form-control" id="txtid" placeholder="Digite o código" name="txtid" value="<?=$id?>">
		<div class="form-group">
			<label for="txtprodutora">Nome da companhia produtora</label>
			<input type="text" class="form-control" id="txtprodutora" placeholder="Digite o nome da produtora" name="txtprodutora" value="<?=$nome?>">
		</div>
		
		<div class="form-group">
			<label for="txtpresidente">Presidente</label>
			<input type="text" class="form-control" id="txtpresidente" placeholder="Digite o nome do presidente da produtora" name="txtpresidente" value="<?=$presidente?>">
		</div>
		<!-- Botao Save-->
		<button type="submit" class="btn btn-primary">Salvar dados</button>

	</div>
</div>

	<!--JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>