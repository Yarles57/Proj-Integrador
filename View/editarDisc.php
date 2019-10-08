<?php
  require_once "../Model/disciplinaModel.class.php";
  session_start();
  $disc = $_SESSION['editaDisc'];

  foreach($disc as $aux){
    $idDisc = $aux['idDisciplina'];
    $nomeDisc = $aux['nomeDisciplina'];
    $siglaDisc = $aux['siglaDisciplina'];
    $cursoDisc = $aux['cursoDisciplina'];
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
                  <input type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeDisciplina" value= "<?php echo "$nomeDisciplina";?>">
                  <label for="firstName">Nome da Disciplina</label>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Sigla da Disciplina" name="codigoLab" required="on" value="<?php echo "$siglaDisciplina";?>" >
                  <label for="lastName">Sigla da Disciplina</label>
                </div>
              </div>
            </div>
          </div>

          <select class="btn btn-info dropdown-toggle" value="<?php echo "$cursoDisciplina";?>">>
            <option> Curso da Disciplina</option>
            <option value="bsis" >BSI</option>
            <option value="lfis" >Física</option>
            <option value="tmec" >Mecatronica</option>
            <option value="lmat" >Matemática</option>
          </select>

        <input type="hidden" name="id" value="<?php echo "$idDisciplina";?>">
        <input type="hidden" name="metodo" value="update">
        <input type="hidden"  name="classe" value="disciplina">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>
  </div>

</body>
</html>
