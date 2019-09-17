<?php
	include "Controller/laboratorioController.php";
	
	if(isset($_GET['classe']) && isset($_GET['metodo'])){
		$classe = $_GET['classe'].'Controller';
		$metodo = $_GET['metodo'];
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		
	}
	else if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$classe= $_POST['classe'].'Controller';
		$metodo= $_POST['metodo'];
		if (isset($_POST['id'])){
			$id = $_POST['id'];
		}
	}
	else{
		$classe ="LaboratorioController";
		$metodo ="inicio";
	}

	$controller = new $classe();

	if(!$id){
		$controller->$metodo();
	}	
	else  {
		$controller->$metodo($id);
	}
	

