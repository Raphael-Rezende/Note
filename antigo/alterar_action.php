<?php
include "Evento_classes.php";

$classes = new Evento();
if(!empty($_POST['evento_id'])) {
    $evento_id = $_POST['evento_id'];
  
    if(!empty($_POST['nome'])) {
      $nome = $_POST['nome'];
      
        if(!empty($_POST['titulo'])) {
            $titulo = $_POST['titulo'];
  
      
            // Classe (método) chamada:
          if ($classes->alterar($nome, $titulo, $evento_id)){
               header("Location: read_evento.php?retorno=1");
           }else{
               header("Location: alterar_evento.php?retorno=2");
            } 
        }else{
          header("Location: read_evento.php?retorno=3");
        } 
    }else{
          header("Location: read_evento.php?retorno=4");
    } 
}else{
    header("Location: read_evento.php?retorno=6");
}

?>
      
  
