<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Dashboard</title>
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
		button{
			width: 97%;
			margin: 0 auto;
			display: block;
			margin: 5px;
			height: 70px;
			background: #3399ff;
			border: 0;
			}
		h1{
			color: #FFF;
			font-size: 1.8em;
			font-weight: lighter;
		}
		a{
			text-decoration: none;
			display: block;
			color: #FFF;
			font-size: 1.1em;
		}

		a:hover{
			text-decoration: none;
		}

		a:link{
			color: #FFF;
		}

		a:visited{
			color: #FFF;
		}
	
	</style>
</head>
<body>
	<div id="container" style= "margin-top: 10%";>
		<h1 class="navbar navbar-dark bg-dark">Gerenciar</h1>
		<button  type="button" class="btn btn-primary" ><a href="cadasLab.php?classe=laboratorio&metodo=create">Cadastrar Laboratórios</a></button>

		<button  type="button" class="btn btn-primary"><a href="listarLab.php?classe=laboratorio&metodo=index">Visualizar Laboratórios</a></button>
		<button  type="button" class="btn btn-primary"><a href="">Visualizar Solicitações</a></button>
		<button  type="button" class="btn btn-primary"><a href="">Cadastrar Professores</a></button>
	</div>
</body>
</html>