<!DOCTYPE html>
<html lang="PT-BR">
  <head>
  	<title>SisRes - Cadastrar Laboratório</title>
  </head>
  <body class="bg-dark">
    <?php
      include "menu/menu.php";
    ?>
      <li class="breadcrumb-item active"> / Cadastrar Laboratório</li>
    </ol>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"> Cadastrar Laboratório </div>
        <div class="card-body">
          <form action="../index.php" method="post">
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input  type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeLab">
                    <label for="firstName">Nome do Laboratório</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" maxlength="6" placeholder="Código do Laboratório" name="codeLab" required="on">
                    <label for="lastName">Código do Laboratório</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input input type="number" min="1" max="30" id="inputEmail" class="form-control" placeholder="Quantidade de Computadores" name="qtdComputadores" required="on">
                <label for="inputEmail">Quantidade de Computadores</label>
              </div>
            </div>        
        </div>
        
        <input type="hidden" name="metodo" value="store">
	      <input type="hidden"  name="classe" value="laboratorio">

        <input type="submit" value="Salvar" class="btn btn-primary">
        
      </form>
  </body>
</html>