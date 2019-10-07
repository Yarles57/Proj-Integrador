<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <title>SisRes - Cadastrar Professor</title>
  <style type="text/css">
    
    .col-md-6{
      margin-top: 3%;
    }
  </style>
</head>
<body class="bg-dark">
  <?php
    include "menu/menu.php";
  ?>
          <li class="breadcrumb-item active"> / Cadastrar Professor</li>
        </ol>

    <div class="container">
      
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastrar Laboratório </div>
        <div class="card-body">
          <form action="../indexProf.php" method="post">
            <div class="form-group">
              <div class="form-row">
              
               <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="cursoProf" class="form-control" placeholder="Curso do Professor" required="on" autofocus="autofocus" name="cursoProf">
                  <label for="cursoProf">Curso do Professor</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="loginProf" class="form-control" placeholder="Nome do Professor" required="on" autofocus="autofocus" name="loginProf">
                  <label for="loginProf">Nome do Professor</label>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="password" id="senhaProf" class="form-control" placeholder="Senha do Professor" required="on" autofocus="autofocus" name="senhaProf">
                  <label for="senhaProf">Senha do Professor</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="celProf" class="form-control" placeholder="N° para contato do Professor" required="on" autofocus="autofocus" name="celProf">
                  <label for="celProf">N° para contato do Professor</label>
                </div>
              </div>
              


              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="email" class="form-control" id="emailProf" placeholder="Seu email" name="emailProf">
                  <label for="emailProf">Email do Professor</label>
                </div>
              </div>
              
              </div>
              </div>
              </div>


                <input type="hidden" name="metodo" value="store">
                <input type="hidden"  name="classe" value="professor">
                <input type="submit" value="Salvar" class="btn btn-primary">
              </form>
  
</body>
</html>