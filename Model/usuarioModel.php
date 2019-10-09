<?php
	class Usuario{
		private $idUsuario;
		private $nomeUsuario;
		private $emailUsuario;
		private $senhaUsuario;
		private $nivelUsuario;
		private $telefoneUsuario;


		public function getIdUsuario(){
		    return $this->idUsuario;
		}
		
		public function setIdUsuario($idUsuario){
		    return $this->idUsuario = $idUsuario;
		}

		public function getNomeUsuario(){
		    return $this->nomeUsuario;
		}
		
		public function setNomeUsuario($nomeUsuario){
		    return $this->nomeUsuario = $nomeUsuario;
		}

		public function getEmailUsuario(){
		    return $this->emailUsuario;
		}
		
		public function setEmailUsuario($emailUsuario){
		    return $this->emailUsuario = $emailUsuario;
		}


		public function getSenhaUsuario(){
		    return $this->senhaUsuario;
		}
		
		public function setSenhaUsuario($senhaUsuario){
		    return $this->senhaUsuario = $senhaUsuario;
		}

		public function getNivelUsuario(){
		    return $this->nivelUsuario;
		}
		
		public function setNivelUsuario($nivelUsuario){
		    return $this->nivelUsuario = $nivelUsuario;
		}

		public function getTelefoneUsuario(){
		    return $this->telefoneUsuario;
		}
		
		public function setTelefoneUsuario($telefoneUsuario){
		    return $this->telefoneUsuario = $telefoneUsuario;
		}

	}

?>