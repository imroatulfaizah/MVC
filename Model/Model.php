<?php

	class Model{
		private $koneksi = null;

		public function konekkuy(){
			if (!is_null($this->koneksi)) {
				return $this->koneksi;
			}
			$this->koneksi = false;
			try {
				$this->koneksi = new PDO('mysql:host=localhost;
					dbname=data','root','');
			}catch(PDOException $e){
				echo $e->getMessage();
			}

			return $this->koneksi;
		}

		public function jukokdata(){
			$konek = $this->konekkuy();
			$statement = $konek->prepare("SELECT * FROM mobile");
			$statement->execute();
			while ($row = $statement->fetch()) {
				$hasile[] = $row;
			}

			return $hasile;
		}
	}
?>