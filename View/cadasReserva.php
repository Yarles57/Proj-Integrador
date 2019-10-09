<?php
  require_once "../Model/cursoModel.php";

  session_start();
  if(!empty( $_SESSION['cursos'])){
     $cursos = $_SESSION['cursos'];
  }
  else{
    header("Location: ../indexCurso.php");
  }


?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Cadastrar Laboratório</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 

</head>
<body>
<?php
		//$cursos = ['Sistemas', 'Mecatronica', 'Física', 'Matemática'];
		$disciplinas = ["CAA", "PWEBI", "PRINTII"];
		$turnos = ["Manhã", "Tarde", "Noite"];
		$periodos = ["Diario", "Semestral"];
	?>
 	
 	<form>
 		<select>
	 		<option selected="selected" name="nomeCurso">Selecione um Curso</option>
			<?php
			  	foreach ($cursos as $curso) {
			  		echo "<option value='{curso->getIdCurso()}'>{$curso->getNomeCurso()}</option>";
			  	}
			?>

		</select>
		<select>
			<option>Selecione uma Disciplina</option>
			<?php 
			  	foreach ($disciplinas as $disciplina) {
			  		echo "<option value='$disciplina'>$disciplina</option>";
			  	}
		  	?>
		</select>

		<select>
			<option>Selecione um Turno</option>
			<?php
			  	foreach ($turnos as $turno) {
			  		echo "<option value='$turno'>$turno</option>";
			  	}
			?>
		</select>
		
		<select>
			<option>Selecione um Período</option>
			<?php
			  	foreach ($periodos as $período) {
			  		echo "<option value='$período'>$período</option>";
			  	}
			?>
		</select>
		<label>Data*: <input type="date" name="" placeholder="Data"></label>
		
 	</form>
</body>
</html>