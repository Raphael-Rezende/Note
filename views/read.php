<html>
<head>
	<title>Seus eventos</title>
	
	<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="<?php echo BASE_URL; ?>assetsjs/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	<div class="row">
	<div class="col-1"></div>
	<div class="col-10">
    <h1 class="display-5">Seus Eventos </h1>
	</div>
	<div class="col-1"></div>
	</div>
	<br/>
</head>
  <body>
     <div class="row">
	    <div class="col-1"></div>
	        <div class="col-10">
			<?php
				if(count($lista) <= 0){
					echo "<div class='alert alert-danger' role='alert'> Não temos evento para este dia<div>";
				}else{
			?>
	    	  <table class="table table-striped">
	    		<tr>
	    			<th>Titulo</th>
                    <th>Assunto</th>
                    <th>Data de Criação</th>
					<th>Para</th>
					<th></th>
					<th></th>
	    			
	    		</tr>
                <?php
									
                		foreach($lista  as $item):
                    
				?>
				

				<tr>
					<td><?php echo $item['titulo']; ?></td>
					<td><?php echo $item['assunto']; ?></td>
                    <td><?php echo $item['data_hora']; ?></td>
					<td><?php echo $item['data']; ?></td>
					
					<td>
						<a class="btn btn-info" href="<?php echo BASE_URL; ?>eventos/edit/<?php echo $item['evento_id']; ?>"> Alterar</a>					
					</td>
					<td>
						<a class="btn btn-dark"href="<?php echo BASE_URL; ?>eventos/del/<?php echo $item['evento_id']; ?>"> Excluir</a>
					</td>
				</tr>
                <?php  
					endforeach; 
					}	
				?>
			</table>
	
	      </div>
		  
	      <div class="col-1"></div>
      </div>
   </body> 
</html>
