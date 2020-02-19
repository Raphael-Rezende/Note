<html>
<head>
    <title></title>
<head>
<body>
    <form method="POST" action="<?php echo BASE_URL;?>receita/addRec_save">

    Valor:<br/><br/>
    <input type="text"  placeholder="R$ 0.00" name="valor_rec" /><br/><br/>

    Data:<br/><br/>
    <input type="date" name="data_rec" /><br/><br/>

    Descrição:<br/><br/>
    <input type="text" name="descricao_rec" /><br/><br/>

    Categoria:<br/>
    <input type="radio" name="categoria_rec"  value="investimento" />Investimento<br/>
    <input type="radio" name="categoria_rec" value="outros" />Outros<br/>
    <input type="radio" name="categoria_rec" value="premio" />Prêmio<br/>
    <input type="radio" name="categoria_rec" value="presente" />Presente<br/>
    <input type="radio" name="categoria_rec" value="salario" />Salário<br/>

    <input type="submit" value="Concluir">
    
    </form>
<body>
</html