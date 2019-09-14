<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Cadastrar Laboratório</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	 <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      font-family: Calibri;
      font-variant: small-caps;
    }
    #container{
      margin-top: 50%;
      width: 25%;
      margin: 0 auto;
      border: 1px solid#3399ff;
      min-width: 10%;

    }
    h1{
      color: #FFF;
      font-size: 1.8em;
      font-weight: lighter;
    }

  </style>

</head>
<body>
	<div id="container" style= "margin-top: 10%";>
		<h1 class="navbar navbar-dark bg-dark">Cadastrar Laboratório</h1>

		<form action="../index.php" method="post">

			<label>Nome:
        <input type="text" class="form-control" name="nomeLab" placeholder="Ex: Laboratório de Redes" required="on" autofocus>
      </label><br />
			
      <label>Código: 
        <input type="text" class="form-control" name="codeLab" maxlength="6" placeholder="Ex: Lab001" required="on" >
      </label><br />
			
      <label>Qtd. Computadores: 
        <input type="number" min="1" max="30" class="form-control" name="qtdComputadores" placeholder="Ex: 20" required="on" >
      </label><br />

			<input type="hidden" name="metodo" value="store">
	    <input type="hidden"  name="classe" value="laboratorio">

			<input type="submit" value="Salvar" class="btn btn-primary">

		</form>
	</div>
</body>
</html>