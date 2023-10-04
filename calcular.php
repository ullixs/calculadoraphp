<!DOCTYPE html>

<html>

<head>

    <title>Resultado da Calculadora</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

 

<div class="container mt-5">

    <h2>Resultado da Calculadora</h2>

 

    <?php


    function calcular($num1, $num2, $operacao) {

        switch ($operacao) {

            case 'soma':

                return $num1 + $num2;

            case 'subtracao':

                return $num1 - $num2;

            case 'multiplicacao':

                return $num1 * $num2;

            case 'divisao':

                if ($num2 != 0) {

                    return $num1 / $num2;

                } else {

                    return "Erro: Divisão por zero!";

                }

            default:

                return "Operação inválida";

        }

    }


    if (isset($_POST['calcular'])) {

        $num1 = $_POST['num1'];

        $num2 = $_POST['num2'];

        $operacao = $_POST['operacao'];

        $resultado = calcular($num1, $num2, $operacao);

        echo "<p class='mt-3'>Resultado: $resultado</p>";

    }

    ?>

 

</div>

 

</body>

</html>