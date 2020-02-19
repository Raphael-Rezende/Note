<?php
include "Evento_classes.php";

$classes = new Evento();


if(empty($_GET['evento_id'])){
	$evento_id = $_GET['evento_id'];

	if($classes->deletar($evento_id)){
	  header("Location: read_evento.php?retorno=201");	
	}else{
		header("Location: read_evento.php?retorno=203");
	}
	
}else{
  
	header("Location: read_evento.php?retorno=202");	
}

?>