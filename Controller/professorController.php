<?php
	require_once "DAO/professorDAO.php";

	class ProfessorController{
		private $professor;
		private $professorDAO;

		public function __construct(){
			$this->professorDAO= new ProfessorDAO;
			$this->professor = new Professor;
		}
		public function index(){
			$prof = $this->professorDAO->listarTudo();
			session_start();
			$_SESSION['professores'] = $prof;

			header('Location: View/dashboard.php');
        }
        public function create(){
			header("Location: View/cadasProf.php");
		}

		public function store(){
			$idProf = $_POST['id'];
			$cursoProf = $_POST[''];
	        $loginProf = $_POST[''];
	        $senhaProf = $_POST[''];
	        $celProf = $_POST[''];
	        $emailProf = $_POST[''];

	        $this->professor->setIdProf($idProf);
	        $this->professor->setCursoProf($cursoProf);
	        $this->professor->setLoginProf($loginProf);
	        $this->professor->setSenhaProf($senhaProf);
	        $this->professor->setCelProf($celProf);
	        $this->professor->setEmailProf($emailProf);
	   
	        $this->professorDAO->insere($this->professor);
		}
		public function edit($id){
			$prof = $this->professorDAO->listaRegistro($id);
			session_start();
			$_SESSION['editaProf'] = $prof;

			header("Location: View/editarProf.php");
		}
		public function update(){
			//falta preencher esses campos
			$idProf = $_POST['id'];
			$cursoProf = $_POST[''];
	        $loginProf = $_POST[''];
	        $senhaProf = $_POST[''];
	        $celProf = $_POST[''];
	        $emailProf = $_POST[''];

	        $this->professor->setIdProf($idProf);
	        $this->professor->setCursoProf($cursoProf);
	        $this->professor->setLoginProf($loginProf);
	        $this->professor->setSenhaProf($senhaProf);
	        $this->professor->setCelProf($celProf);
	        $this->professor->setEmailProf($emailProf);

	        $this->professorDAO->atualizar($this->professor);
		}
		public function delete($id){
			$this->professorDAO->deleta($id);

			header("Location: View/listarProf.php");
		}
	}