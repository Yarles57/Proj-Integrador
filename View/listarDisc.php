<?php
  require_once "../Model/disciplinaModel.php";

  session_start();
  if(!empty( $_SESSION['disciplinas'])){
     $disc = $_SESSION['disciplinas'];
  }
  else{
    //header("Location: ../indexDisc.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>ResLab</title>
  </head>

  <body id="page-top">
    <?php
    include "menu/menu.php";
    ?>
    <li class="breadcrumb-item active">Listar Disciplinas</li>
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
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>Sigla</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </tfoot>

       <?php
          foreach($disc as $aux){
            echo "<tr>";
            echo "<td>{$aux->getNomeDisc()}</td>";

            echo "<td>{$aux->getSiglaDisc()}</td>";
           
                
            echo '<td><a href="../indexDisc.php?classe=disciplina&metodo=edit&id='.$aux->getIdDisc().'">Editar</a></td>'; 
            
            echo '<td><a class="delete" delid="'.$aux->getIdDisc().'" href="../indexDisc.php?classe=disciplina&metodo=delete&id='.$aux->getIdDisc().'">Deletar</a></td>';
            echo "</tr>";
            
          }
        ?>

      </table>
     <a href="../indexDisc.php?classe=disciplina&metodo=create">Adicionar</a>
    

  
      
  <script>
    $(function(){
      $(".delete").on('click', function(e) {
        e.preventDefault();
        var delid = $(this).attr("delid");

        if (confirm('Deseja deletar esse Curso?')) {
            window.location.replace("../indexCurso.php?classe=curso&metodo=delete&id="+delid);
        }
      });
    });
  </script>   

  </body>

</html>
