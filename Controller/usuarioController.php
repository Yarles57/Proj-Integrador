<?php
	require_once "DAO/usuarioDAO.php";

	class UsuarioController{

		private $usuario;
		private $usuarioDAO;

		public function __construct(){
			$this->usuarioDAO= new UsuarioDAO;
			$this->usuario = new Usuario;
		}

		public function index(){
			$usuarios = $this->usuarioDAO->listarTudo();
			session_start();
			$_SESSION['usuarios'] = $usuarios;

			header('Location: View/listarUsuarios.php');
        }

		public function inicio(){
			header("Location: View/dashboard.php");
		}

        public function create(){
			header("Location: View/cadasUsuario.php");
		}

		public function store(){
			//recebe os dados do cadasLab.php da View, chama o metodo insere do LaboratorioDAO passando no parametro o objeto Laboratorio, para que os dados sejam guardados no banco

			$nomeUsuario = $_POST['nomeUser'];
	        $emailUsuario = $_POST['emailUser'];
	        $senhaUsuario = $_POST['senhaUser'];
	        $nivelUsuario = $_POST['nivelUser'];
	        $telefoneUsuario = $_POST['telefoneUser'];
	        
	        $this->usuario->setNomeUsuario($nomeUsuario);
	        $this->usuario->setEmailUsuario($emailUsuario);
	        $this->usuario->setSenhaUsuario($senhaUsuario);
	        $this->usuario->setNivelUsuario($nivelUsuario);
	        $this->usuario->setTelefoneUsuario($telefoneUsuario);
	
	        $this->usuarioDAO->insere($this->usuario);

	        $this->index();
		}

		public function edit($id){
			//atraves do ID seleciona os dados do registro e envia pela SESSION para o editarLab.php da View

			$usuarios = $this->usuarioDAO->listaRegistro($id);
			session_start();
			$_SESSION['editaUsuario'] = $usuarios;

			header("Location: View/editarUsuario.php");
		}

		public function update(){
			//recebe os novos dados do editarLab.php da View, chama o metodo atualizar do laboratorioDAO passando no parametro o objeto laboratório, para que os dados sejam substituidos no banco

			$idUsuario = $_POST['id'];
			$nomeUsuario = $_POST['nomeUser'];
	        $emailUsuario = $_POST['emailUser'];
	        $senhaUsuario = $_POST['senhaUser'];
	        $nivelUsuario = $_POST['nivelUser'];
	        $telefoneUsuario = $_POST['telefoneUser'];

	        $this->usuario->setIdUsuario($idUsuario);
	      	$this->usuario->setNomeUsuario($nomeUsuario);
	        $this->usuario->setEmailUsuario($emailUsuario);
	        $this->usuario->setSenhaUsuario($senhaUsuario);
	        $this->usuario->setNivelUsuario($nivelUsuario);
	        $this->usuario->setTelefoneUsuario($telefoneUsuario);
	
	        $this->usuarioDAO->insere($this->usuario);

	        $this->index();
		}

		public function delete($id){
			$this->usuarioDAO->deleta($id);
			$this->index();
		}
	}