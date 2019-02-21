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
	<?php include '../controllers/cad_filme.php'?>
	<div class="container" style="padding-top: 25px;">
		<form action="" enctype="multipart/form-data" method="POST">
			<?php
				if($edt){ 
			?>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php echo $dir_cover;?>" alt="<?php echo $row['name_movie'];?>" class="rounded img-reponsive" width="300px;">
					</div>
					<div class="col-sm-8">
						<h4><?php echo $name_movie;?></h4>
						<div class="form-group">
							<label for="description-movie" class="sr-only">Descrição do Filme</label>
							<textarea class="form-control" id="description-movie" name="description-movie" rows="5" placeholder="Descrição do Filme"><?php echo $description_movie;?></textarea>
						</div>
					</div>
				</div><br>
			</div>
			<?php
			}else{

			?>
			<div>
				<div class="form-group">
					<label for="title-movie" class="sr-only">Título do Filme</label>
					<input type="text" class="form-control" id="title-movie" name="title-movie" placeholder="Título do Filme">
				</div>

				<div class="form-group">
					<label for="description-movie" class="sr-only">Descrição do Filme</label>
					<textarea class="form-control" id="description-movie" name="description-movie" rows="5" placeholder="Descrição do Filme"></textarea>
				</div>

				<div class="form-group">
					<label for="image-movie" class="sr-only">Capa do Filme</label>
					<input type="file" class="form-cotrol-file" id="image-movie" name="image-movie">
					<small id="image-help" class="form-text text-muted">A imagem deve ser no formato JPEG</small>
				</div>
			</div>
			<?php
			}
			?>

			<button type="submit" class="btn btn-primary" name="save">Salvar</button>
		</form>

		
	</div>
</body>
</html>