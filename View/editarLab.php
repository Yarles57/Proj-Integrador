<?php
  require_once "../Model/labModel.php";
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
    <meta charset="UTF-8"/>
    <title>Editar Laboratório</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

    <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      font-family: Calibri;
      font-variant: small-caps;
    }
    #container{
      margin-top: 50%;
      width: 25%;
      margin: 0 auto;
      border: 1px solid#3399ff;
      min-width: 10%;

    }
    h1{
      color: #FFF;
      font-size: 1.8em;
      font-weight: lighter;
    }
  </style>
  </head>

  <body>
    <div id="container" style= "margin-top: 10%";>
      <h1 class="navbar navbar-dark bg-dark">Alterar dados do Laboratório</h1>
      <form method="post" action="../index.php">

          <label>Nome:
          <input type="text"  class="form-control" name="nomeLaboratorio" value= "<?php echo "$nomeLaboratorio";?>" /></label><br />
       
          <label>Código: 
          <input type="text"  class="form-control" name="codigoLab" value="<?php echo "$codigoLaboratorio";?>"></label><br />
       
          <label>Qtd. Computadores: 
          <input type="text" class="form-control" name="qtdcomp" value="<?php echo "$qtd";?>"></label><br />
              
        <input type="hidden" name="id" value="<?php echo "$idLaboratorio";?>">
        <input type="hidden" name="metodo" value="update">
        <input type="hidden"  name="classe" value="laboratorio">

        <button type="submit" class="btn btn-primary">Alterar</button>

      </form>
    </div>

  </body>

</html>
