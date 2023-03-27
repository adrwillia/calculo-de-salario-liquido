<?php

    $salarioBruto = $_POST["salarioBruto"];
    $desconto = $_POST["desconto"];
    $Dependentes = $_POST["dependentes"];
    

    if($salarioBruto <= 1302){
        $inssvalor = $salarioBruto * 0.075;
        $inss = 7.5;
        $totalDesconto = $desconto + $inssvalor;
    }
    else if($salarioBruto > 1302 && $salarioBruto <= 2571){
        $inssvalor = $salarioBruto * 0.09;
        $inss = 9;
        $totalDesconto = $desconto + $inssvalor;
    }
    else if($salarioBruto > 2571 && $salarioBruto <=  3856){
        $inssvalor = $salarioBruto * 0.12;
        $inss = 12;
        $totalDesconto = $desconto + $inssvalor;
    }
    else{
        $inssvalor = $salarioBruto * 0.14;
        $inss = 14;
        $totalDesconto = $desconto + $inssvalor;
    }

    if($salarioBruto <= 1903){
        $irrfvalor = 0.0;
        $irrf = 0;
    }
    else if($salarioBruto > 1903 && $salarioBruto <= 2826){
        $irrfvalor = $salarioBruto * 0.075;
        $irrf = 7.5;
    }
    else if($salarioBruto > 2826 && $salarioBruto <= 3751){
        $irrfvalor = $salarioBruto * 0.15;
        $irrf = 15;
    }
    else if($salarioBruto > 3751 && $salarioBruto <= 4664){
        $irrfvalor = $salarioBruto * 0.22;
        $irrf = 22;
    }
    else{
        $irrfvalor = $salarioBruto * 0.27;
        $irrf = 27;
    }


    $totalDesconto = $irrfvalor + $totalDesconto;

    $salarioLiquido = $salarioBruto - $totalDesconto;



    echo "<link rel=stylesheet href=processa.css>";

    echo "<h1>Resultado</h1 >";

    echo "<table > 
        <tr> 
            <th> Eventos </th> 
            <th> Alíquota Real </th>
            <th> Proventos </th>
            <th> Descontos </th>
        </tr>

        <tr> 
        <td> Salário Bruto </td> 
        <td> -- </td>
        <td> R$$salarioBruto,00 </td>
        <td> -- </td>
        </tr>

        <tr> 
        <td> Outros </td> 
        <td> -- </td>
        <td> -- </td>
        <td> R$$desconto,00 </td>
        </tr>

        <tr> 
        <td> INSS </td> 
        <td> $inss% </td>
        <td> -- </td>
        <td> R$$inssvalor,00 </td>
        </tr>

        <tr> 
        <td> IRRF </td> 
        <td> $irrf% </td>
        <td> -- </td>
        <td> R$$irrfvalor,00 </td>
        </tr>

        <tr> 
        <td colspan=2> Totais </td> 
        <td> R$$salarioBruto,00 </td>
        <td> R$$totalDesconto,00 </td>
        </tr>

        <tr> 
        <th colspan=2> Valor Salário Líquido </th> 
        <th colspan=2> R$$salarioLiquido,00 </th>
        </tr>

     </table>";

     echo ""



?>