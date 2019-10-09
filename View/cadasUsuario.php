<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <title>SisRes - Cadastrar Laboratório</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/sb-img.css" rel="stylesheet">
  </head>
  
  <body class="bg-dark">
    <?php
      include "menu/menu.php";
    ?>
    <li class="breadcrumb-item active"> / Cadastrar Laboratório</li>
    </ol>

    <!-- Navbar -->
  
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"> Cadastrar Usuário </div>
        <div class="card-body">
          <form action="../indexUser.php" method="post">
            
            <div class="form-group">
              <div class="form-row">

                <div class="col-md-6">
                  <div class="form-label-group">
                    <input  type="text" id="firstName" class="form-control" placeholder="Nome do Usuário" required="on" autofocus="autofocus" name="nomeUser">
                    <label for="firstName">Nome do Usuário</label>
                  </div>
                </div>
       
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" maxlength="6" placeholder="E-mail do Usuário" name="emailUser" required="on">
                    <label for="lastName">E-mail do Usuário</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input input type="password" id="inputEmail" class="form-control" placeholder="Senha do Usuário" name="senhaUser" required="on">
                <label for="inputEmail">Senha do Usuário</label>
              </div>
            </div>


            <div class="form-group">
              <div class="form-label-group">
                <input input type="number" min="0" max="1" id="inputE" class="form-control" placeholder="Nível do Usuário" name="nivelUser" required="on">
                <label for="inputEl">Nível do Usuário</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input input type="text"  id="inputEma" class="form-control" placeholder="Telefone do Usuário" name="telefoneUser" required="on">
                <label for="inputEm">Telefone do Usuário</label>
              </div>
            </div>

        </div>
        
        <input type="hidden" name="metodo" value="store">
        <input type="hidden"  name="classe" value="usuario">

        <input type="submit" value="Salvar" class="btn btn-primary">
        
      </form>
  </body>
</html>