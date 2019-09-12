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
  </head>

  <body>

    <div class="container">
      <h3>Lista </h3>
      
      <table border="1">
        <tr>
          <td><strong></strong></td>
          
        </tr>
       <!-- <?php
          foreach($lab as $aux){
            echo "<tr>";
            echo "<td><a href='../autenticar.php?classe=laboratorio&metodo=show&laboratorioId=".$aux->getIdLab()."''>{$aux->getNomeLab()}</a></td>";
           
            

           //esses href passa para o index via GET os valores da classe e metodo juntamente com o ID do registro escolhido

            //echo '<td>Mostrar +</td>';

            echo '<td><a href="../autenticar.php?classe=laboratorio&metodo=edit&laboratorioId='.$aux->getIdLab().'">Editar</a></td>';          

            echo '<td><a href="../autenticar.php?classe=laboratorio&metodo=delete&laboratorioId='.$aux->getIdLab().'">Deletar</a></td>';
            echo "</tr>";

            
          }
        ?>-->

        <?php 
          foreach ($lab as $key => $value) {
            $value->getNomeLab();
          }
        ?>
      </table>

      <br>

     <!-- <a href="../index.php?classe=fornecedor&metodo=create">Adicionar</a>-->
      
    </div>

  </body>

</html>
