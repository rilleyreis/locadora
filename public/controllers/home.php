<?php
	
	include '../../assets/config.php';
	require '../models/Filme.php';

	$filme = new Filme;
	$dir_cover = "../../assets/cover/";

	$count_movie = $filme->count($pdo);
	$table_message = "";
	$filmes;

	if($count_movie > 0){
		$filmes = $filme->read($pdo);
	}else{
		$table_message = "Nenhum filme cadastrado";
	}

?>