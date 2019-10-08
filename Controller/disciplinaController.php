<?php
require_once "DAO/disciplinaDAO.php";

	class DisciplinaController{
		
		private $disciplina;
		private $disciplinaDAO;

		public function __construct(){
			$this->disciplinaDAO= new DisciplinaDAO;
			$this->disciplina = new Disciplina;
		}
		
		public function index(){
			$disc = $this->disciplinaDAO->listarTudo();
			session_start();
			$_SESSION['disciplinas'] = $disc;
			header('Location: View/listarDisc.php');

        }
		
		public function inicio(){
			header("Location: View/dashboard.php");
		}
        

        public function create(){
			header("Location: View/cadasDisc.php");
		}

		public function store(){
			$nomeDisciplina = $_POST['nomeDisc'];
			$siglaDisciplina = $_POST['siglaDisc'];
	        $cursoDisciplina = $_POST['cursoDisc'];

	        echo "$nomeDisciplina";
	        echo "$siglaDisciplina";
	        echo "$cursoDisciplina";


	        $this->disciplina->setNomeDisc($nomeDisciplina);
	        $this->disciplina->setSiglaDisc($siglaDisciplina);
	        $this->disciplina->setCursoDisc($cursoDisciplina);

	   
	        $this->disciplinaDAO->insere($this->disciplina);
	        $this->index();
		}

		public function edit($id){
			//atraves do ID seleciona os dados do registro e envia pela SESSION para o editarLab.php da View

			$disc = $this->disciplinaDAO->listaRegistro($id);
			session_start();
			$_SESSION['editaDisc'] = $disc;

			header("Location: View/editarDisc.php");
		}

		public function update(){
			//recebe os novos dados do editarLab.php da View, chama o metodo atualizar do laboratorioDAO passando no parametro o objeto laboratório, para que os dados sejam substituidos no banco
			$idDisciplina = $_POST['id'];
			$nomeDisciplina = $_POST['nomeDisciplina'];
	        $siglaDisciplina = $_POST['siglaDisc'];
	        $cursoDisciplina = $_POST['cursoDisc'];
	        $this->disciplina->setIdDisc($idDisciplina);
	        $this->disciplina->setNomeDisc($nomeDisciplina);
	        $this->disciplina->setSiglaDisc($siglaDisciplina);
	        $this->disciplina->setCursoDisc($cursoDisciplina);
	        $this->disciplinaDAO->atualizar($this->disciplina);

	        $this->index();
		}

		public function delete($id){
			$this->disciplinaDAO->deleta($id);
			$this->index();
		}
	}