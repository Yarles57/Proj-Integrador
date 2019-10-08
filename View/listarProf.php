<?php
  require_once "../Model/professorModel.class.php";
  session_start();
  if(!empty( $_SESSION['professores'])){
     $prof = $_SESSION['professores'];
  }
  else{
      header("Location: ../indexProf.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>

    <title>SisRes - Lisar Professor</title>

  </head>

  <body id="page-top">
    <?php
    include "menu/menu.php";
  ?>
          <li class="breadcrumb-item active"> / Listar Professores</li>
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
                    <th>Curso</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Curso</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Email</th> 
                    <th>Editar</th>
                    <th>Excluir</th>
                  </tr>
                </tfoot>

       <?php
          foreach($prof as $aux){
            echo "<tr>";
            echo "<td>{$aux->getCursoProf()}</td>";
            echo "<td>{$aux->getLoginProf()}</td>";
            echo "<td>{$aux->getCelProf()}</td>";
            echo "<td>{$aux->getEmailProf()}</td>";

             echo '<td><a href="../indexProf.php?classe=professor&metodo=edit&id='.$aux->getIdProf().'"> Editar</a></td>';

             echo '<td><a class="delete" delid="'.$aux->getIdProf().'" href="../index.php?classe=professor&metodo=delete&id='.$aux->getIdProf().'"> Excluir </a></td>';
            echo '</tr>';
            
          }
        ?>

      </table>


     <a href="../indexProf.php?classe=professor&metodo=create">Adicionar</a>

  </body>

</html>
