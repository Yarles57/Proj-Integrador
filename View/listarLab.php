<?php
  require_once "../Model/laboratorioModel.class.php";

  session_start();
  if(!empty( $_SESSION['laboratorios'])){
     $lab = $_SESSION['laboratorios'];
  }
  else{
    header("Location: ../indexProf.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>

    <title>SisRes - Listar Lab</title>

  </head>

  <body id="page-top">
    <?php
    include "menu/menu.php";
    ?>
          <li class="breadcrumb-item active"> / Listar Laboratórios</li>
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
                    <th>Código</th>
                    <th>Qtd. computadores</th> 
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>Código</th>
                    <th>Qtd. computadores</th> 
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </tfoot>

       <?php
          foreach($lab as $aux){
            echo "<tr>";
            echo "<td>{$aux->getNomeLab()}</td>";

            echo "<td>{$aux->getCodLab()}</td>";

            echo "<td>{$aux->getQtdComputadores()}</td>";
           
                
            echo '<td><a href="../index.php?classe=laboratorio&metodo=edit&id='.$aux->getIdLab().'">Editar</a></td>'; 
            
            echo '<td><a class="delete" delid="'.$aux->getIdLab().'" href="../index.php?classe=laboratorio&metodo=delete&id='.$aux->getIdLab().'">Deletar</a></td>';
            echo "</tr>";
            
          }
        ?>

      </table>
     <a href="../index.php?classe=laboratorio&metodo=create">Adicionar</a>
    
  </body>

</html>
