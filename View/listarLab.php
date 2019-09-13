<?php
  require_once "../Model/labModel.php";
  session_start();
  $lab = $_SESSION['laboratorios'];  
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8"/>
    <title></title>

    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  </head>

  <body>

  <div class="container">
      <h3>Lista de Laboratórios</h3>
      
      <table border="1" class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Nome</th>          
            </tr>
        </thead>
       <?php
          foreach($lab as $aux){
            echo "<tr>";
            echo "<td><a href='../index.php?classe=laboratorio&metodo=show&id=".$aux->getIdLab()."''>{$aux->getNomeLab()}</a></td>";
           
                
            echo '<td><a href="../index.php?classe=laboratorio&metodo=edit&id='.$aux->getIdLab().'">Editar</a></td>';          

            echo '<td><a href="../index.php?classe=laboratorio&metodo=delete&id='.$aux->getIdLab().'">Deletar</a></td>';
            echo "</tr>";
            
          }
        ?>

      </table>

      <br>

     <a href="../index.php?classe=laboratorio&metodo=create">Adicionar</a>
      
    </div>


  </body>

</html>
