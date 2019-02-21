<?php 
	
	include '../../assets/config.php';
	require '../models/Filme.php';

	$filme = new Filme;
	$dir_cover = "../../assets/cover/";
	$name_movie;
	$description_movie;

	if (isset($_POST['delete'])) {
		$filme->setId(base64_decode($_GET['del']));
		$filme->delete($pdo);
		header("Location:home.php");
	}

	if(isset($_GET['del'])){		
		$filme->setId(base64_decode($_GET['del']));
		$filme = $filme->selectOnce($pdo);
		foreach ($filme as $row) {
			$dir_cover .= $row['cover_movie'];
			$name_movie = $row['name_movie'];
			$description_movie = $row['description_movie'];
		}
	}

 ?>