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
	<div class="container">
		<?php include '../controllers/home.php'?>
		<!-- Div dos botões -->
		<div class="row" style="padding-top: 25px; margin-bottom: 25px;">
			<div class="col-xs-12">
				<a href="cad_filme.php" class="btn-lg btn-primary"><i class="fa fa-plus"></i> Adicionar Novo Filme</a>
			</div>
		</div>
		
		<h1>Filmes Cadastrados</h1>
		
		<table class="table table-striped table-bordered" style="margin-top: 25px;">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Título</th>
					<th scope="col">Descrição</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if($count_movie > 0){
					$cont = 0;
					foreach ($filmes as $row) {?>
						<tr>
							<th scope="row"><img src="<?php echo $dir_cover.$row['cover_movie'];?>" alt="<?php echo $row['name_movie'];?>" class="d-block mx-auto rounded img-reponsive" width="100px;"></th>
							<td><?php echo $row['name_movie'];?></td>
							<td style="width: 45%;"><?php echo $row['description_movie'];?></td>
							<td>
								<a href="cad_filme.php?edt=<?php echo base64_encode($row['id_movie']);?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
								<a href="del_filme.php?del=<?php echo base64_encode($row['id_movie']);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							</td>
						</tr>

					<?php
					}
				}
				?>
			</tbody>
		</table>
		<?php echo $table_message;?>
	</div>
</body>
</html>