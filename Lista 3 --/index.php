<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="processa.php" method="post">
    <div class="principal">  
    <h2>Calculoo de Salário Liquido</h2>
    <div>
        R$<input type="Number" name="salarioBruto" placeholder="Salário Bruto" class="input">

        R$<input type="Number" name="desconto" placeholder="Desconto" class="input">
    </div>

    <div class="div">
        <br><br>
        Número de Dependentes:<input type="Number" name="dependentes" class="input" id="input" placeholder="Quantidade de Dependesntes">
        <button class="inpu" id="lim">Limpa</button>
        <button class="inpu" id="cal">Calcular</button>



        <!--<input type="button" name="limpa" class="inpu" value="Limpar" id="lim">
        <input type="button" name="Calcular" class="inpu" value="Calcular" id="cal">-->
    </div>

    </div>
    </form>
</body>
</html>




