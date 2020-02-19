<html>
<head>
    <title></title>
<head>
<body>
    <form method="POST" action="<?php echo BASE_URL;?>despesa/addDes_save">

    Valor:<br/><br/>
    <input type="text"  placeholder="R$ 0.00" name="valor" /><br/><br/>

    Data:<br/><br/>
    <input type="date" name="data" /><br/><br/>

    Descrição:<br/><br/>
    <input type="text" name="descricao" /><br/><br/>

    Categoria:<br/>
    <input type="radio" name="categoria"  value="alimentacao" />Alimentação<br/>
    <input type="radio" name="categoria" value="lazer" />Lazer<br/>
    <input type="radio" name="categoria" value="roupa" />Roupa<br/>
    <input type="radio" name="categoria" value="transporte" />Transporte<br/>
    <input type="radio" name="categoria" value="pagamentos" />Pagamentos<br/>

    <input type="submit" value="Concluir">
    
    </form>
<body>
</html