<?php
  require_once "../Model/cursoModel.php";

  session_start();
  if(!empty( $_SESSION['cursos'])){
     $cursos = $_SESSION['cursos'];
  }
  else{
    //header("Location: ../indexCurso.php");
  }

  require_once "../Model/disciplinaModel.php";
  $disc = $_SESSION['editaDisc'];

  foreach($disc as $aux){
    $idDisc = $aux['idDisciplina'];
    $nomeDisc = $aux['nomeDisciplina'];
    $siglaDisc = $aux['siglaDisciplina'];
    $cursoDisc = $aux['idCursoFk'];
  } 

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <title>SisRes - Editar Disciplina</title>


</head>
<body class="bg-dark">
  <?php
    include "menu/menu.php";
  ?>
    <li class="breadcrumb-item active"> / Editar Disciplina</li>
  </ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Editar Disciplina</div>
      <div class="card-body">

        <form action="../indexDisc.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeDisciplina" value= "<?php echo "$nomeDisc";?>">
                  <label for="firstName">Nome da Disciplina</label>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Sigla da Disciplina" name="siglaDisc" required="on" value="<?php echo "$siglaDisc";?>" >
                  <label for="lastName">Sigla da Disciplina</label>
                </div>
              </div>
            </div>
          </div>

         

         <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
          <option selected="selected" name = "cursoDisc"> Curso da Disciplina</option>
          <?php
            foreach ($cursos as $curso) {
               echo "<option value='{$curso->getIdCurso()}' >{$curso->getNomeCurso()}</option>";
            }
           
          ?>
        </select>

        <input type="hidden" name="id" value="<?php echo "$idDisc";?>">
        <input type="hidden" name="metodo" value="update">
        <input type="hidden"  name="classe" value="disciplina">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>
  </div>

</body>
</html>
