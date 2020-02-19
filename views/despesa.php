<div class="row">
	    <div class="col-1"></div>
		    <div class="col-10">
		    	<a href="<?php echo BASE_URL; ?>despesa/addDes"><button class="btn btn-primary">Criar Despesa</button></a>
		    </div>
		<div class="col-1"></div>
	</div>

	<html> 
<head>
	<title></title>
	
	<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="<?php echo BASE_URL; ?>assetsjs/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>

    <h1 class="display-4">Despesas </h1>
</head>
  <body>
     <div class="row">
	    <div class="col-1"></div>
	        <div class="col-10">
	    	  <table class="table table-striped">
			  
	    		<tr>
				    <th>Data</th>
	    			<th>Descrição</th>
                    <th>Categoria</th>
                    <th>Valor</th>
					
	    			
	    		</tr>
                <?php
				$total = 0;
                foreach($lista  as $item):
				  $total +=$item['valor'];	
				?>
				

				<tr>
				    <td><?php echo $item['data']; ?></td>
					<td><?php echo $item['descricao']; ?></td>
					<td><?php echo $item['categoria']; ?></td>
                    <td><?php echo $item['valor']; ?></td>
					
					
					
					<td>
						<a class="btn btn-primary" href="<?php echo BASE_URL; ?>despesa/editFinancas/<?php echo $item['despesas_id']; ?>"> Alterar</a>					
					</td>
					<td>
						<a class="btn btn-danger"href="<?php echo BASE_URL; ?>despesa/delDes/<?php echo $item['despesas_id']; ?>"> Excluir</a>
					</td>

					
				</tr>
				     
				
                <?php  
            endforeach; ?>
						<th></th>
						<th></th>
			           <td>Total</td>
					   <td><?php  
					   		 echo $total;
							/* $pdo = new PDO('mysql:host=localhost;dbname=project_note', 'root','');							
							 $sql = "SELECT SUM(valor) AS valor FROM despesas";
							 $sql = $pdo->prepare($sql);						
							 $sql->execute();
							 
							while($row = $sql->fetch()){
							  
								 $val = $row['valor'];
							}
								
								echo $val;*/
											
					   ?></td>
			

			</table>
	
	      </div>
		  
	      <div class="col-1"></div>
      </div><br></br><br></br><br></br><br></br><br></br>
		
   </body> 

