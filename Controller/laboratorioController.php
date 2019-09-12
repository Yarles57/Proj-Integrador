<?php
	require_once "DAO/laboratorioDAO.php";

	class LaboratorioController{

		private $laboratorio;
		private $laboratorioDAO;

		public function __construct(){
			$this->laboratorioDAO= new LaboratorioDAO;
			$this->laboratorio = new Laboratorio;
		}

		public function index(){

			$lab = $this->laboratorioDAO->listarTudo();
			session_start();
			$_SESSION['laboratorios'] = $lab;
			header('Location: View/listarLaboratorios.php');
        }

        public function create(){
			header("Location: View/cadasLab.php");
		}

		public function store(){

			//recebe os dados do cadasLab.php da View, chama o metodo insere do LaboratorioDAO passando no parametro o objeto Laboratorio, para que os dados sejam guardados no banco

			$nomeLaboratorio = $_POST['nomeLab'];
	        $codigoLaboratorio = $_POST['codeLab'];
	        $qtdCompLab = $_POST['qtdComputadores'];
	        

	        $this->laboratorio->setNomeLab($nomeLaboratorio);
	        $this->laboratorio->setCodLab($codigoLaboratorio);
	        $this->laboratorio->setQtdComputadores($qtdCompLab);
	        

	        $this->laboratorioDAO->insere($this->laboratorio);
		}

		public function edit($id){
			//atraves do ID seleciona os dados do registro e envia pela SESSION para o editarFornecedores.php da View

			$lab = $this->laboratorioDAO->listaRegistro($id);
			session_start();
			$_SESSION['editaLab'] = $lab;


			header("Location: View/editarLab.php");
		}

		public function update(){

			//recebe os novos dados do editarFornecedor.php da View, chama o metodo atualizar do fornecedorDAO passando no parametro o objeto fornecedor, para que os dados sejam substituidos no banco
			$idLaboratorio = $_POST['idLab'];
			$nomeLaboratorio = $_POST['nomeLab'];
	        $codigoLaboratorio = $_POST['codLab'];
	        $qtdCompLab = $_POST['qtdcompLab'];
	      

	        $this->laboratorio->setIdLab($idLaboratorio);
	        $this->laboratorio->setNomeLab($nomeLaboratorio);
	        $this->laboratorio->setCodLab($codigoLaboratorio);
	        $this->laboratorio->setQtdComputadores($qtdcompLab);

	        $this->laboratorioDAO->atualizar($this->laboratorio);
		}

		public function delete($id){


			$this->laboratorioDAO->deleta($id);

			header("Location: ./dashboard.php");
		}

		public function show($id){

			$forne = $this->laboratorioDAO->listaRegistro($id);
			session_start();
			$_SESSION['showLab'] = $lab;
			header("Location: View/showLab.php");
		}

	}