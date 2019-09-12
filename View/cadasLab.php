<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Cadastrar Laboratório</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">-->

</head>
<body>
	<form action="../autenticar.php" method="post">

		<label>Nome: <input type="text" name="nomeLab" required="on"></label><br />
		<label>Código: <input type="text" name="codeLab" required="on"></label><br />
		<label>Qtd. Computadores: <input type="number" name="qtdComputadores" required="on"></label><br />

		<input type="hidden" name="metodo" value="store">
        <input type="hidden"  name="classe" value="laboratorio">

		<input type="submit" value="Salvar">

	</form>
</body>
</html>