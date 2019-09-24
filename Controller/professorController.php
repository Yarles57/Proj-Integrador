<?php
	require_once "DAO/professorDAO.php";

	class ProfessorController{
		
		private $professor;
		private $professorDAO;

		public function __construct(){
			$this->professorDAO= new ProfessorDAO;
			$this->professor = new Professor;
		}

		public function inicio(){
			header("Location: View/dashboard.php");
		}

		public function index(){
			$prof = $this->professorDAO->listarTudo();
			session_start();
			$_SESSION['professores'] = $prof;

			header('Location: View/listarProf.php');
        }
        
        public function create(){
			header("Location: View/cadasProf.php");
		}

		public function store(){
			$cursoProf = $_POST['cursoProf'];
			$loginProf = $_POST['loginProf'];
			//md5 é para criptografar a senha
	        $senhaProf = md5($_POST['senhaProf']);
	        $celProf = $_POST['celProf'];
	        $emailProf = $_POST['emailProf'];

	        $this->professor->setCursoProf($cursoProf);
	        $this->professor->setLoginProf($loginProf);
	        $this->professor->setSenhaProf($senhaProf);
	        $this->professor->setCelProf($celProf);
	        $this->professor->setEmailProf($emailProf);
	   
	        $this->professorDAO->insere($this->professor);
	        $this->index();
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
			$cursoProf = $_POST['cursoProf'];
	        $loginProf = $_POST['loginProf'];
	        $senhaProf = $_POST['senhaProf'];
	        $celProf = $_POST['celProf'];
	        $emailProf = $_POST['emailProf'];

	        $this->professor->setIdProf($idProf);
	        $this->professor->setCursoProf($cursoProf);
	        $this->professor->setLoginProf($loginProf);
	        $this->professor->setSenhaProf($senhaProf);
	        $this->professor->setCelProf($celProf);
	        $this->professor->setEmailProf($emailProf);

	        $this->professorDAO->atualizar($this->professor);

	        $this->index();
		}
		public function delete($id){
			$this->professorDAO->deleta($id);

			$this->index();
		}

		public function show($id){
			$prof = $this->professorDAO->listaRegistro($id);
			session_start();
			$_SESSION['showProf'] = $lab;
			header("Location: View/showProf.php");
		}

	}