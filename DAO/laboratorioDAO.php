<?php
	require_once "conf/database.class.php";
	require_once "Model/labModel.php";
	
	class LaboratorioDAO{

		public function listarTudo(){

			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			$result = $pdo->query("SELECT * FROM laboratorio");
			$linhas = $result->fetchAll(PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){

				$laboratorio[$i] = new Laboratorio;

				$laboratorio[$i]->setIdLab($linhas[$i]['idLab']);
				$laboratorio[$i]->setCodLab($linhas[$i]['codLab']);
				$laboratorio[$i]->setNomeLab($linhas[$i]['nomeLab']);
				$laboratorio[$i]->setQtdComputadores($linhas[$i]['qtdcompLab']);
			}	

	  		return $laboratorio;
		}

		
		public function listaRegistro($id){

			$labId = $id;
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM laboratorio WHERE id='$labId'");
			$linha = $result->fetchAll(PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($laboratorio){
			$pdo = Database::conexao();

			$nomeLaboratorio = $laboratorio->getNomeLab();
			$codigoLaboratorio = $laboratorio->getCodLab();
			$qtdComputadoresLab = $laboratorio->getQtdComputadores();
			

			$query = "INSERT INTO laboratorio (nomeLab, codLab, qtdcompLab) VALUES (?,?,?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeLaboratorio);
    		$stmt->bindParam(2, $codigoLaboratorio);
    		$stmt->bindParam(3, $qtdComputadoresLab);

    		$ok = $stmt->execute();

    		header("Location: View/dashboard.php");
		}

		public function atualizar($laboratorio){
			$pdo = Database::conexao();

			$idlaboratorio = $laboratorio->getIdLab();
			$nomelaboratorio = $laboratorio->getNomeLab();
			$codigoLaboratorio = $laboratorio->getCodLab();
			$qtdcompLab = $laboratorio->getQtdComputadores();
			

			$query = "UPDATE laboratorio SET nomeLab=?, codLab=?, 
			qtdcompLab=? WHERE id=?";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomelaboratorio);
    		$stmt->bindParam(2, $codigoLaboratorio);
    		$stmt->bindParam(3, $qtdcompLab);
    		$stmt->bindParam(5, $idlaboratorio);
    		$ok = $stmt->execute();

    		header("Location: dashboard.php");
		}

		public function deleta($id){


			$pdo = Database::conexao();
			$query = ("DELETE FROM laboratorio WHERE id=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    		$ok = $stmt->execute();
    		
		}
	}
	
			

			