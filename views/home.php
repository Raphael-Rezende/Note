<HTML>
	<head>
		<title></title>
		<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-1.11.1.min.js"></script>
	</head>
	<body>
	
<!------ Include the above in your HEAD tag ---------->
<div class="row">
	    <div class="col-1"></div>
		    <div class="col-10">
		    	<a href="<?php echo BASE_URL; ?>eventos/add"><button class="btn btn-primary">Novo Evento</button></a>
		    </div>
		<div class="col-1"></div>
	</div>

<!--- Calendario --->
<div class="container theme-showcase">
  <h1>Calendar</h1>
<div id="holder" class="row" ></div>
</div>
  

<?php
    
    $info = array(
        'tabela' => 'evento',
        'data' => 'data',
        'titulo' => 'titulo',
        
    );
?>

<html lang="pt-BR">
    <head>
        <meta charset=UTF-8>
        <title></title>
        <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <div class="calendario">
     <?php 

        
            $eventos = montaEventos($info);
            montaCalendario($eventos);
     ?>
     <div class="legends">
         <span class="legenda"><span class="blue"></span> Eventos</span>
         <span class="legenda"><span class="red"></span> Hoje</span>
     </div>
    </div>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>
    </body>
</html>
	</body>

</HTML>
