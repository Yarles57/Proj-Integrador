<?php
  require_once "../Model/labModel.php";
  session_start();
  $linha = $_SESSION['editaLab'];

  foreach($linha as $aux){
    $idLaboratorio = $aux['idLab'];
    $nomeLaboratorio = $aux['nomeLab'];
    $codigoLaboratorio = $aux['codLab'];
    $qtdCompLab = $aux['qtdcompLab'];
    
  } 

?>

<!DOCTYPE html>
<html lang="PT-BR">

  <head>
    <meta charset="UTF-8"/>
    <title>Editar Laboratório</title>
    <meta charset="utf-8">
  </head>

  <body>

      <h3>Alterar dados de Fornecedor</h3>

      <form method="post" action="../autenticar.php">

          

          <label>Nome: </label>
          <input type="text"  name="nome" value= "<?php echo "$nomeLaboratorio";?>" /><br />
       

       
          <label>Código: </label>
          <input type="text"  name="endereco" value="<?php echo "$codigoLaboratorio";?>"><br />
       

        
          <label>Qtd. Computadores: </label>
          <input type="text" name="telefone" value="<?php echo "$qtdcompLab";?>"><br />
              

        <!-- passa para o index via POST os valores da classe e metodo, juntamente com o ID, para que possa ser atualizado no banco os novos dados-->
        
        <input type="hidden" name="labId" value="<?php echo "$id";?>">
        <input type="hidden" name="metodo" value="update">
        <input type="hidden"  name="classe" value="laboratorio">

        <button type="submit">Alterar</button>

      </form>
    </div>

  </body>

</html>
