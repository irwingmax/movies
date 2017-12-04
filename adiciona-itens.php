<!DOCTYPE html>
<html>
<head>
	<title>Filmes</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Filmes</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="adiciona-itens.php">Adicionar novos filmes</a></li>
    </ul>
  </div>
</nav>
<div class="container" style="margin-top:50px;">
	<h2>Cadastre um novo filme</h2>
	<form action="RequestData.php" method="post" accept-charset="utf-8">
		<input type="hidden" name="id" value="${paramId}">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" class="form-control" >
		</div>
		<div class="form-group">
			<label for="marca">Categoria:</label>
			<input type="text" name="categoria" class="form-control" >
		</div>
		<div class="form-group">
			<label for="marca">Duração:</label>
			<input type="text" name="duracao" class="form-control" >
		</div>
		<div class="form-group">
			<label for="marca">Censura:</label>
			<input type="text" name="censura" class="form-control" >
		</div>
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</form>
</div>
</body>
</html>