<!DOCTYPE html>

<html>

<head>

    <title>Calculadora PHP</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

 

<div class="container mt-5">

    <h2>Calculadora PHP</h2>

    <form method="POST" action="calcular.php">

        <div class="form-group">

            <input type="text" name="num1" class="form-control" placeholder="Digite o primeiro número" required>

        </div>

        <div class="form-group">

            <input type="text" name="num2" class="form-control" placeholder="Digite o segundo número" required>

        </div>

        <div class="form-group">

            <select name="operacao" class="form-control">

                <option value="soma">Adição</option>

                <option value="subtracao">Subtração</option>

                <option value="multiplicacao">Multiplicação</option>

                <option value="divisao">Divisão</option>

            </select>

        </div>

        <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>

    </form>

</div>

 

</body>

</html>