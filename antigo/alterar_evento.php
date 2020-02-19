<HTML>
 <header>
     <title>Alterar Evento </title
 </header
 <body>
 <?php
include "Evento_classes.php";

$classes = new Evento();

if(!empty($_GET['evento_id'])) {
	$evento_id = $_GET['evento_id'];

	$info = $classes->getInfo($evento_id);

	if(empty($info['nome'])) {
		header("Location: read_evento.php");
		exit;
	}
// caso contrario manda para o index:
}else {

	header("Location: read_evento.php?retorno=303");
	// Um exit para garantir que ele não vai exibir o resto do conteudo.
	exit;
}




?>
      <form method="POST" action="alterar_action.php">
          <input type="hidden" name="evento_id" value="<?php echo $evento_id; ?>" />
          Nome do compromisso:<br></br>
          <input  type="text" name="nome"/><br></br><br></br>
          Do que se trata:<br></br>
          <input  type="text" name="titulo"/><br></br><br></br>

          <input  type="submit" value="Alterar"/>

      </form>
 </body>
</HTML>