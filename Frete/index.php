<!DOCTYPE html>
<html lang="ptb-r">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php" method="post">
        <label for="">Nome</label>
        <input type="text" placeholder="Nome completo"  name="name"><br>
        <label for="">Valor de compra</label>
        <input type="text" placeholder="Valor de Compra"  name="valorcompra"><br>
        <label for="">Peso de protudo</label>
        <input type="number" placeholder="Peso do Produto"  name="pesop"><br>
        <label for="">Distancia</label>
        <input type="number" placeholder="Distancia"  name="distancia"><br>
        <label for="">Tipo de entrega</label>
       <select name="tentrega" id="tipodeentrega">
            <option value="eeconomica">Ecônomica</option>  
            <option value="enormal">Normal</option>  
            <option value="eexpressa">Expressa</option>
            <option value="eretirada">Retirada</option>
        </select><br>  
        <label for="">Tipo de Produto</label>
        <select name="tproduto" id="tipodeproduto"><br>
            <option value="pnormal">Normal</option>
            <option value="pfragil">Fragil</option>
        </select><br>
        <input type="submit">


    </form>
</body> 
</html>