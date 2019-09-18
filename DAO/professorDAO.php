<?php
	require_once "conf/database.class.php";
	require_once "Model/professorModel.class.php";
	
	class ProfessorDAO{

		public function listarTudo(){

			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			$result = $pdo->query("SELECT * FROM professor");
			$linhas = $result->fetchAll(PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
				$professor[$i] = new Professor;

				$professor[$i]->setIdProf($linhas[$i]['idProf']);
				$professor[$i]->setCursoProf($linhas[$i]['cursoProf']);
				$professor[$i]->setLoginProf($linhas[$i]['loginProf']);
				$professor[$i]->setSenhaProf($linhas[$i]['senhaProf']);
				$professor[$i]->setCelProf($linhas[$i]['celProf']);
				$professor[$i]->setEmailProf($linhas[$i]['emailProf']);							
			}	
	  		return $professor;
		}
		
		public function listaRegistro($id){

			$profId = $_GET['id'];
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM professor WHERE idProf='$profId'");
			$linha = $result->fetchAll(PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($professor){
			$pdo = Database::conexao();

			$cursoProfessor = $professor->getCursoProf();
			$loginProfessor = $professor->getLoginProf();
			$senhaProfessor = $professor->getSenhaProf();
			$celProfessor = $professor->getCelProf();
			$emailProfessor = $professor->getEmailProf();	

			$query = "INSERT INTO professor (cursoProf, loginProf, senhaProf,celProf, emailProf ) VALUES (?,?,?, ?, ?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1,$cursoProfessor);
    		$stmt->bindParam(2, $loginProfessor);
    		$stmt->bindParam(3, $senhaProfessor);
    		$stmt->bindParam(4, $celProfessor);
    		$stmt->bindParam(5, $emailProfessor);

    		$ok = $stmt->execute();

    		header("Location: View/dashboard.php");
		}

		public function atualizar($professor){
			$pdo = Database::conexao();	
			$idProfessor = $professor->getIdProf();	
			$cursoProfessor = $professor->getCursoProf();
			$loginProfessor = $professor->getLoginProf();
			$senhaProfessor = $professor->getSenhaProf();
			$celProfessor = $professor->getCelProf();
			$emailProfessor = $professor->getEmailProf();

			$query = "UPDATE professor SET cursoProf = ?, loginProf = ?, senhaProf = ?,celProf = ?, emailProf = ?) WHERE idProf = ?";
    		$stmt->bindParam(1,$cursoProfessor);
    		$stmt->bindParam(2, $loginProfessor);
    		$stmt->bindParam(3, $senhaProfessor);
    		$stmt->bindParam(4, $celProfessor);
    		$stmt->bindParam(5, $emailProfessor);
    		$stmt->bindParam(5, $idProfessor);

    		
    		$ok = $stmt->execute();
    		header("Location: View/listarProf.php");
		}

			public function deleta($id){

			$pdo = Database::conexao();
			$query = ("DELETE FROM professor WHERE idProf=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    		$ok = $stmt->execute();

		}
	}
	
			

			
