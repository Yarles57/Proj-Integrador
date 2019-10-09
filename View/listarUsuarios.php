<?php
  require_once "../Model/usuarioModel.php";

  session_start();
  if(!empty( $_SESSION['usuarios'])){
     $usuarios = $_SESSION['usuarios'];
  }
  else{
    //header("Location: ../indexUser.php");
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
    <li class="breadcrumb-item active">Listar Laboratórios</li>
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
                    <th>E-mail</th>
                    <th>Telefone</th>     
                    <th>Nível</th>
                    <th>Editar</th>
                    <th>Excluir</th>   
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nome</th>     
                    <th>E-mail</th>
                    <th>Telefone</th>     
                    <th>Nível</th>
                    <th>Editar</th>
                    <th>Excluir</th>      
                  </tr>
                </tfoot>

       <?php
          foreach($usuarios as $aux){
            echo "<tr>";
            echo "<td>{$aux->getNomeUsuario()}</td>";
            echo "<td>{$aux->getEmailUsuario()}</td>";
            echo "<td>{$aux->getTelefoneUsuario()}</td>";
            echo "<td>{$aux->getNivelUsuario()}</td>";
           
                
            echo '<td><a href="../indexUser.php?classe=usuario&metodo=edit&id='.$aux->getIdUsuario().'">Editar</a></td>'; 
            
            echo '<td><a class="delete" delid="'.$aux->getIdUsuario().'" href="../indexUser.php?classe=usuario&metodo=delete&id='.$aux->getIdUsuario().'">Deletar</a></td>';
            echo "</tr>";
            
          }
        ?>

      </table>
     <a href="../indexUser.php?classe=usuario&metodo=create">Adicionar</a>
    

  
      
  <script>
    $(function(){
      $(".delete").on('click', function(e) {
        e.preventDefault();
        var delid = $(this).attr("delid");

        if (confirm('Deseja deletar esse Curso?')) {
            window.location.replace("../indexUser.php?classe=usuario&metodo=delete&id="+delid);
        }
      });
    });
  </script>   

  </body>

</html>
