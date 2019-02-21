<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Rilley Reis">

	<link rel="stylesheet" href="../../components/css/bootstrap.css">
	<link rel="stylesheet" href="../../components/css/font-awesome.css">
	
	<title>Wakanda Filmes</title>
</head>
<body>	
	<?php include '../controllers/del_filme.php'?>
	<div class="container" style="padding-top: 25px;">
		<form action="" enctype="multipart/form-data" method="POST">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php echo $dir_cover;?>" alt="<?php echo $row['name_movie'];?>" class="rounded img-reponsive d-block mx-auto" width="200px;">
					</div>
					<div class="col-sm-8">
						<h4><?php echo $name_movie;?></h4>
						<h6><?php echo $description_movie;?></h6>
					</div>
				</div><br>
			</div><br><br>
			<div class="card d-block mx-auto" style="width: 30rem;">
				<div class="card-body" style="text-align: center">
					<h3>Deseja realmente excluir este filme?</h3>
					<button type="submit" class="btn btn-danger" name="delete">Deletar</button>
					<a href="../views/home.php" class="btn btn-primary">Cancelar</a>
				</div>				
			</div>
		</form>

		
	</div>
</body>
</html>