<?php
	require_once "conf/database.class.php";
	require_once "Model/disciplinaModel.php";
	
	class DisciplinaDAO{

		public function listarTudo(){

			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			$result = $pdo->query("SELECT * FROM tb_disciplina");
			$linhas = $result->fetchAll(PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
				$disciplina[$i] = new Disciplina;

				$disciplina[$i]->setIdDisc($linhas[$i]['idDisciplina']);
				$disciplina[$i]->setNomeDis($linhas[$i]['nomeDisciplina']);
				$disciplina[$i]->setSiglaDisc($linhas[$i]['siglaDisciplina']);
				$disciplina[$i]->setCursoDisc($linhas[$i]['idCursoFk']);			
			}	
	  		return $disciplina;
		}
		
		public function listaRegistro($id){

			$discId = $_GET['id'];
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM tb_disciplina WHERE idDisciplina = '$discId'");
			$linha = $result->fetchAll(PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($disciplina){
			$pdo = Database::conexao();

			$nomeDisciplina = $disciplina->getNomeDisc();
			$siglaDisciplina = $disciplina->getSiglaDisc();
			$cursoDisciplina = $disciplina->getCursoDisc();

			$query = "INSERT INTO tb_disciplina (nomeDisciplina, siglaDisciplina, idCursoFk) VALUES (?,?,?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeDisciplina);
    		$stmt->bindParam(2, $siglaDisciplina);
    		$stmt->bindParam(3, $cursoDisciplina);

    		$ok = $stmt->execute();

    		header("Location: View/listarDisc.php");
		}

		public function atualizar($Disciplina){
			$pdo = Database::conexao();			
			$idDisciplina = $disciplina->getIdDisc();
			$nomeDisciplina = $disciplina->getNomeDisc();
			$siglaDisciplina = $disciplina->getSiglaDisc();
			$cursoDisciplina = $disciplina->getCursoDisc();
			
			$query = "UPDATE tb_disciplina SET nomeDisciplina=?, siglaDisciplina=?, idCursoFk=? WHERE idDisc=?";
    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeDisciplina);
    		$stmt->bindParam(2, $siglaDisciplina);
    		$stmt->bindParam(3, $cursoDisciplina);
    		$stmt->bindParam(4, $idDisciplina);
    		
    		$ok = $stmt->execute();
    		// header("Location: View/listarLab.php");
		}

			public function deleta($id){

			$pdo = Database::conexao();
			$query = ("DELETE FROM tb_disciplina WHERE idDisciplina=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    		$ok = $stmt->execute();

		}
	}
	
			

			
