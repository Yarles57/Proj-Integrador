<?php
	require_once "conf/database.class.php";
	require_once "Model/laboratorioModel.class.php";
	
	class LaboratorioDAO{

		public function listarTudo(){

			$pdo = Database::conexao(); //Variavel que armazena a conexão do banco
			$result = $pdo->query("SELECT * FROM tb_laboratorio");
			$linhas = $result->fetchAll(PDO::FETCH_ASSOC);
			
			for($i = 0; $i<count($linhas); $i++){
				$laboratorio[$i] = new Laboratorio;

				$laboratorio[$i]->setIdLab($linhas[$i]['idLab']);
				$laboratorio[$i]->setNomeLab($linhas[$i]['nomeLab']);
				$laboratorio[$i]->setQtdComputadores($linhas[$i]['qtdcompLab']);
				$laboratorio[$i]->setCodLab($linhas[$i]['codLab']);			
			}	
	  		return $laboratorio;
		}
		
		public function listaRegistro($id){

			$labId = $_GET['id'];
			$pdo = Database::conexao();
			$result = $pdo->query("SELECT * FROM tb_laboratorio WHERE idLab='$labId'");
			$linha = $result->fetchAll(PDO::FETCH_ASSOC);

			return $linha;
		}

		public function insere($laboratorio){
			$pdo = Database::conexao();

			$nomeLaboratorio = $laboratorio->getNomeLab();
			$codigoLaboratorio = $laboratorio->getCodLab();
			$qtdComputadoresLab = $laboratorio->getQtdComputadores();

			$query = "INSERT INTO tb_laboratorio (nomeLab, codLab, qtdcompLab) VALUES (?,?,?)";

    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeLaboratorio);
    		$stmt->bindParam(2, $codigoLaboratorio);
    		$stmt->bindParam(3, $qtdComputadoresLab);

    		$ok = $stmt->execute();

    		header("Location: View/listarLab.php");
		}

		public function atualizar($laboratorio){
			$pdo = Database::conexao();			
			$idLaboratorio = $laboratorio->getIdLab();
			$nomeLaboratorio = $laboratorio->getNomeLab();
			$codigoLaboratorio = $laboratorio->getCodLab();
			$qtd = 	$laboratorio->getQtdComputadores();
			$query = "UPDATE tb_laboratorio SET nomeLab=?, codLab=?, qtdcompLab=? WHERE idLab=?";
    		$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $nomeLaboratorio);
    		$stmt->bindParam(2, $codigoLaboratorio);
    		$stmt->bindParam(3, $qtd);
    		$stmt->bindParam(4, $idLaboratorio);
    		
    		$ok = $stmt->execute();
    		// header("Location: View/listarLab.php");
		}

			public function deleta($id){

			$pdo = Database::conexao();
			$query = ("DELETE FROM tb_laboratorio WHERE idLab=?");
			$stmt = $pdo->prepare($query);
    		$stmt->bindParam(1, $id);
    		$ok = $stmt->execute();

		}
	}
	
			

			
