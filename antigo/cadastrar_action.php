<?php
include 'Evento_classes.php';

$classes = new Evento();

if(!empty($_POST['nome']) && !empty($_POST['titulo']) ) {
    
        $nome = $_POST['nome'];
        $titulo= $_POST['titulo'];
       // $data_hora = date_format('d-m-Y H:i:s');
       
        

        if($classes->cadastrar($nome, $titulo)){
            header("Location: index.php");
        }else{
            header("Location: cadastrar_evento.php");
    
        }
    


    
}else{
    header("Location: cadastrar_evento.php");
    
}