<?php
	require_once "conf/database.class.php";
	require_once "Model/usuarioModel.php";
	
	class UsuarioDAO{
		public function listarTudo(){

			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			$result = $pdo->query("SELECT * FROM tb_usuario");
			$linhas = $result->fetchAll(PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
				$usuario[$i] = new Laboratorio;

				$usuario[$i]->setIdUsuario($linhas[$i]['idUsuario']);
				$usuario[$i]->setNomeUsuario($linhas[$i]['nomeUsuario']);
				$usuario[$i]->setEmailUsuario($linhas[$i]['emailUsuario']);				
				$usuario[$i]->setNivelUsuario($linhas[$i]['nivelUsuario']);	
				$usuario[$i]->setTelefoneUsuario($linhas[$i]['telefoneUsuario']);			
			}	
	  		return $usuario;
		}
		
		public function listaRegistro($id){

			$usuarioId = $_GET['id'];
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM tb_usuario WHERE idUsuario='$usuarioId'");
			$linha = $result->fetchAll(PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($usuario){
			$pdo = Database::conexao();

			$nomeUsuario = $usuario->getNomeUsuario();
	        $emailUsuario = $usuario->getEmailUsuario();
	        $senhaUsuario = $usuario->getSenhaUsuario();
	        $nivelUsuario = $usuario->getNivelUsuario();
	        $telefoneUsuario = $usuario->getTelefoneUsuario();

			$query = "INSERT INTO tb_usuario (nomeUsuario, emailUsuario, senhaUsuario, nivelUsuario, telefoneUsuario) VALUES (?,?,?,?,?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeUsuario);
    		$stmt->bindParam(2, $emailUsuario);
    		$stmt->bindParam(3, $senhaUsuario);
    		$stmt->bindParam(4, $nivelUsuario);
    		$stmt->bindParam(5, $telefoneUsuario);

    		$ok = $stmt->execute();

    		header("Location: View/listarUsuarios.php");
		}

		public function atualizar($usuario){
			$pdo = Database::conexao();	

			$idUsuario = $usuario->getIdUsuario();
			$nomeUsuario = $usuario->getNomeUsuario();
	        $emailUsuario = $usuario->getEmailUsuario();
	        $senhaUsuario = $usuario->getSenhaUsuario();
	        $nivelUsuario = $usuario->getNivelUsuario();
	        $telefoneUsuario = $usuario->getTelefoneUsuario();
			
			$query = "UPDATE tb_usuario SET nomeUsuario=?, emailUsuario=?, senhaUsuario=?, nivelUsuario=?, telefoneUsuario=? WHERE idDisciplina=?";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeUsuario);
    		$stmt->bindParam(2, $emailUsuario);
    		$stmt->bindParam(3, $senhaUsuario);
    		$stmt->bindParam(4, $nivelUsuario);
    		$stmt->bindParam(5, $telefoneUsuario);
    		$stmt->bindParam(6, $idUsuario);
    		
    		$ok = $stmt->execute();
		}

		public function deleta($id){

			$pdo = Database::conexao();
			$query = ("DELETE FROM tb_usuario WHERE idDisciplina=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    		$ok = $stmt->execute();

		}
	}
	
			

			
