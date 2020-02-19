<div class="row">
	    <div class="col-1"></div>
		    <div class="col-10">
		    	<a href="<?php echo BASE_URL; ?>receita/addRec"><button class="btn btn-primary">Criar Receita</button></a>
		    </div>
		<div class="col-1"></div>
	</div>

	<html>
<head>
	<title></title>
	
	<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="<?php echo BASE_URL; ?>assetsjs/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>

    <h1 class="display-4">Receita </h1>
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
				    <td><?php echo $item['data_rec']; ?></td>
					<td><?php echo $item['descricao_rec']; ?></td>
					<td><?php echo $item['categoria_rec']; ?></td>
                    <td><?php echo $item['valor_rec']; ?></td>
					

					
					
					<td>
						<a class="btn btn-primary" href="<?php echo BASE_URL; ?>receita/editRec/<?php echo $item['receita_id']; ?>"> Alterar</a>					
					</td>
					<td>
						<a class="btn btn-danger" href="<?php echo BASE_URL; ?>receita/delRec/<?php echo $item['receita_id']; ?>"> Excluir</a>
					</td>

					
				</tr>
				     
				
                <?php  
            endforeach; ?>
						<th></th>
						<th></th>
			           <td>Total</td>
					   <td> <?php echo $total; ?></td>

			</table>
	
	      </div>
		  
	      <div class="col-1"></div>
      </div><br></br><br></br><br></br><br></br><br></br>
		
   </body> 

