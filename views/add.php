<HTML>
 <!--<head>
     <title>Novo Evento </title>
 </head>
 <body>
      <form method="POST" action="<?php //echo BASE_URL; ?>eventos/add_save">
         Titulo:<br></br>
          <input  type="text" name="titulo"/><br></br><br></br>
          Assunto:<br></br>
          <textarea name="assunto" rows="10" cols="50"></textarea><br></br><br></br>

          <input  type="submit" value="Novo Evento"/>

      </form>
 </body>
!-->


<!DOCTYPE html>
<html>
<head>
	<title>Novo Evento</title>
	<link rel="stylesheet" = href="style2.css">
	<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="<?php echo BASE_URL; ?>assetsjs/bootstrap.min.js"></script>
    
</head>
<body>
<div class="div">
<h1 class="h1">Novo Note:</h1>


<form method="POST" action="<?php echo BASE_URL; ?>eventos/add_save">
	<div class="form-group">
		<label for="titulo">Titulo :</label>		
 		<input id="titulo1" type="text" name="titulo" class="form-control" aria-describedby="nomeHelp"><br></br>
 		

		<label for="assunto1">Assunto :</label>	
		<textarea id="assunto1"  name="assunto" rows="10" cols="50" class="form-control" aria-describedby="assuntoHelp"></textarea><br></br>

		<label for="titulo">Para Quando :</label>		
 		<input id="data1" type="date" name="data" class="form-control" aria-describedby="nomeHelp"><br></br>



		
		<button type="submit" name="Confirmar" class="btn btn-primary">Enviar</button>
	</div>	
</div>
</form>
</body>
</HTML>