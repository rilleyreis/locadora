<?php
	
	include '../../assets/config.php';
	require '../models/Filme.php';

	$filme = new Filme;
	$dir_cover = "../../assets/cover/";
	$edt = false;
	$name_movie;
	$description_movie;

	if (isset($_POST['save'])) {
		if(!isset($_GET['edt'])){
			$filme->setNome(trim(strip_tags($_POST['title-movie'])));
			$filme->setDescricao(trim(strip_tags($_POST['description-movie'])));
			$extensão = strtolower(substr($_FILES['image-movie']['name'], -5));
			$novoNome = $filme->getNome().$extensão;
		    move_uploaded_file($_FILES['image-movie']['tmp_name'], $dir_cover.$novoNome);
		    $filme->setCapa($novoNome);
		    $filme->create($pdo);
		    header("Location:home.php");
		}else{
			var_dump($_POST);
			$filme = new Filme;
			$filme->setId(base64_decode($_GET['edt']));
			$filme->setDescricao(trim(strip_tags($_POST['description-movie'])));
			$filme->update($pdo);
		    header("Location:home.php");
		}
	}

	if(isset($_GET['edt'])){		
		$filme->setId(base64_decode($_GET['edt']));
		$filme = $filme->selectOnce($pdo);
		foreach ($filme as $row) {
			$dir_cover .= $row['cover_movie'];
			$name_movie = $row['name_movie'];
			$description_movie = $row['description_movie'];
		}
		$edt = true;
	}
?>