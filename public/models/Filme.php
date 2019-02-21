<?php 
	
	/**
	 * 
	 */
	class Filme{
		
		private $id;
		private $nome;
		private $descricao;
		private $capa;


		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}
		
		public function getDescricao(){
			return $this->descricao;
		}

		public function getCapa(){
			return $this->capa;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function setCapa($capa){
			$this->capa = $capa;
		}

		public function read($pdo){
			$sql = "SELECT * FROM `FILME`";
			$query = $pdo->query($sql);
        	return $query->fetchAll();
		}

		public function count($pdo){
			$sql = "SELECT * FROM `FILME`";
			$query = $pdo->query($sql);
        	return $query->rowCount();
		}

		public function create($pdo){
			$sql = "INSERT INTO `FILME` (`name_movie`, `description_movie`, `cover_movie`) VALUES (:nome, :descricao, :capa)";
			try{
				$insert = $pdo->prepare($sql);
				$insert->execute(array(':nome' => $this->nome, ':descricao' => $this->descricao, ':capa' => $this->capa));
			}catch (PDOException $e){
	            echo $e->getMessage();
	        }
		}

		public function selectOnce($pdo){
			$sql = "SELECT * FROM `FILME` WHERE `id_movie` = '$this->id'";
			$query = $pdo->query($sql);
        	return $query;
		}

		public function update($pdo){
			$sql = "UPDATE `FILME` SET `description_movie` = '$this->descricao' WHERE `id_movie` = '$this->id'";
			$update = $pdo->prepare($sql);
			$update->execute();
		}

		public function delete($pdo){
			$sql = "DELETE FROM `FILME` WHERE `id_movie` = '$this->id'";
			$delete = $pdo->prepare($sql);
			$delete->execute();			
		}

	}

?>