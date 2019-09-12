<?php
	include "Controller/laboratorioController.php";
	
	if(isset($_GET['classe']) && isset($_GET['metodo'])){
		$classe = $_GET['classe'].'Controller';
		$metodo = $_GET['metodo'];
		if (isset($_GET['laboratorioId'])) {
			$fornecedorId = $_GET['laboratorioId'];
		}
		
	}
	else if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$classe= $_POST['classe'].'Controller';
		$metodo= $_POST['metodo'];
		if (isset($_POST['laboratorioId'])){
			$laboratorioId = $_POST['laboratorioId'];
		}
	}
	else{
		$classe ="LaboratorioController";
		$metodo ="index";
	}

	$controller = new $classe();

	if(!$laboratorioId){
		$controller->$metodo();
	}	
	else  {
		$controller->$metodo($laboratorioId);
	}
	

