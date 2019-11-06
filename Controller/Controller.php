<?php

	require 'Model/Model.php';

	class Controller{

		public $model;

		function __construct(){
			$this->model = new Model();
		}

		public function tampilnodata(){
			$data = $this->model->jukokdata();
			include 'View/nampil.php';
		}
	}

?>