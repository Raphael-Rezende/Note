<?php
include 'Evento_classes.php';


$classes = new Evento();
?>
<html>
<head>
	<title></title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <h1 class="display-4">Seus Eventos </h1>
</head>
  <body>
     <div class="row">
	    <div class="col-1"></div>
	        <div class="col-10">
	    	  <table class="table table-striped">
	    		<tr>
				    <th>Id</th>
	    			<th>Nome</th>
                    <th>Conteudo</th>
                    <th>Data de Criação</th>
	    			
	    		</tr>
			    <?php
                    if(!empty($_GET['data_hora'])){
                        $data_hora = $_GET['data_hora'];
                         $classes->getData($data_hora);
                    }
				$lista = $classes->read();
                foreach($lista  as $item):
                    
				?>
				

				<tr>
				    <td><?php echo $item['evento_id']; ?></td>
					<td><?php echo $item['nome']; ?></td>
					<td><?php echo $item['titulo']; ?></td>
                    <td><?php echo $item['data_hora']; ?></td>
					
					<td>
						<a class="btn btn-primary" href="alterar_evento.php?id=<?php  echo $item['evento_id']; ?>"> Alterar</a>					
					</td>
					<td>
						<a class="btn btn-danger"href="excluir_php.php?id=<?php echo $item['evento_id']; ?>"> Excluir</a>
					</td>
				</tr>
                <?php  
            endforeach; ?>
			</table>
	
	      </div>
		  <a class="btn btn-link"href="index.php"> Voltar menu</a>
	      <div class="col-1"></div>
      </div>
   </body> 
</html>





