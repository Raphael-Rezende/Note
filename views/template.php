<html>
	<head>
		<title>JARVIS</title>
		<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="<?php  echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Jarvis Note</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL; ?>eventos/read">Lista Eventos</a>
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Controle Financeiro
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>despesa/read">Despesas</a>
          <a class="dropdown-item" href="<?php echo BASE_URL; ?>receita/read">Receitas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Visão Geral</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <br>
    <div  class="alert alert-success" role="alert" style="display:none;">
      <center>Cadastro realizado com suscesso!</center>
    </div>
    <br>
    
	<br>
		
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

		
	</body>
</html>