<?php
  require_once "../Model/laboratorioModel.class.php";
  session_start();
  $lab = $_SESSION['editaLab'];

  foreach($lab as $aux){
    $idLaboratorio = $aux['idLab'];
    $nomeLaboratorio = $aux['nomeLab'];
    $codigoLaboratorio = $aux['codLab'];
    $qtd = $aux['qtdcompLab'];
  } 

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <title>SisRes - Editar Laboratório</title>


</head>
<body class="bg-dark">
  <?php
    include "menu/menu.php";
  ?>
          <li class="breadcrumb-item active"> / Editar Laboratório</li>
        </ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Editar Laboratório</div>
      <div class="card-body">

        <form action="../index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeLaboratorio" value= "<?php echo "$nomeLaboratorio";?>">
                  <label for="firstName">Nome do Laboratório</label>
                </div>
                </div>
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Código do Laboratório" name="codigoLab" required="on" value="<?php echo "$codigoLaboratorio";?>" >
                  <label for="lastName">Código do Laboratório</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input input type="number" min="1" id="inputEmail" class="form-control" placeholder="Quantidade de Computadores" name="qtdcomp" required="on" value="<?php echo "$qtd";?>">
              <label for="inputEmail">Quantidade de Computadores</label>
            </div>
          </div>

          <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.html">Sair</a>
        </div>
      </div>
    </div>
  </div>

        <input type="hidden" name="id" value="<?php echo "$idLaboratorio";?>">
        <input type="hidden" name="metodo" value="update">
        <input type="hidden"  name="classe" value="laboratorio">

        <button type="submit" class="btn btn-primary">Alterar</button>

    </form>
  </div>

</body>
</html>
