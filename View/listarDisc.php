<?php
  require_once "../Model/disciplinaModel.class.php";

  session_start();
  if(!empty( $_SESSION['disciplinas'])){
     $lab = $_SESSION['disciplinas'];
  }
  else{
    header("Location: ../indexDisc.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>

    <title>SisRes - Listar Disc</title>

  </head>

  <body id="page-top">
    <?php
    include "menu/menu.php";
    ?>
          <li class="breadcrumb-item active"> / Listar Disciplinas</li>
        </ol>
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabela de Dados</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>     
                    <th>Sigla</th>
                    <th>Curso</th> 
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>Sigla</th>
                    <th>Curso</th> 
                    <th>Editar</th>
                    <th>Excluir</th>    
                  </tr>
                </tfoot>

       <?php
          foreach($lab as $aux){
            echo "<tr>";
            echo "<td>{$aux->getNomeDisc()}</td>";

            echo "<td>{$aux->getSiglaDisc()}</td>";

            echo "<td>{$aux->getCursoDisc()}</td>";
           
                
            echo '<td><a href="../indexDisc.php?classe=disciplina&metodo=edit&id='.$aux->getIdDisc().'">Editar</a></td>'; 
            
            echo '<td><a class="delete" delid="'.$aux->getIdDisc().'" href="../indexDisc.php?classe=disciplina&metodo=delete&id='.$aux->getIdDisc().'">Deletar</a></td>';
            echo "</tr>";
            
          }
        ?>

      </table>
     <a href="../indexDisc.php?classe=disciplina&metodo=create">Adicionar</a>
    
  </body>

</html>
