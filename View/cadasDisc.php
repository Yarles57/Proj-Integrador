  <!DOCTYPE html>
<html lang="PT-BR">
  <head>
  	<title>SisRes - Cadastrar Disciplina</title>
  </head>
  
  <body class="bg-dark">
    <?php
      include "menu/menu.php";
    ?>
    <li class="breadcrumb-item active"> / Cadastrar Disciplina</li>
    </ol>

    <!-- Navbar -->
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"> Cadastrar Disciplina </div>
        <div class="card-body">
          <form action="../indexDisc.php" method="post">
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input  type="text" id="firstName" class="form-control" placeholder="First name" required="on" autofocus="autofocus" name="nomeDisc">
                    <label for="firstName">Nome da Disciplina</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" maxlength="6" placeholder="Sigla da Diciplina" name="siglaDisc" required="on">
                    <label for="lastName">Sigla da Diciplina</label>
                  </div>
                </div>
              </div>
            </div>
            
			  <select class="btn btn-info dropdown-toggle" name ="cursoDisc">
			    <option selected="selected"  > Curso da Disciplina</option>
			    <option value="bsis"  name ="cursoDisc" >BSI</option>
			    <option value="lfis" >Física</option>
			    <option value="tmec" >Mecatronica</option>
			    <option value="lmat" >Matemática</option>
			  </select>


        </div>
        
        <input type="hidden" name="metodo" value="store">
	     <input type="hidden"  name="classe" value="disciplina">
        <input type="submit" value="Salvar" class="btn btn-primary">
        
      </form>
  </body>
</html>