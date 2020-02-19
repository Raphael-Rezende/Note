<h3>Editar Note</h3>

<form method="POST">
	Titulo: <br/>
	<input type="text" name="titulo" value="<?php echo $info['titulo']; ?>"/><br/><br/>

	Assunto:<br/>
    <textarea name="assunto" value="<?php echo $info['assunto']; ?>"></textarea><br/><br/>

	
	<input type="submit" value="Salvar" />
</form>