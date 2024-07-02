<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <div>
        <form action="conexao.php" method="post">
            <p>Digite o valor da transferência:</p>

            <input type="number" name="valor" id="valor">

            <br>
            <p>Selecione a moeda:</p>

            <input list="browsers" name="moeda">

                <datalist id="browsers">
                    <option value="Real">
                    <option value="Dólar">
                    <option value="Euro">
                </datalist>

                <br>
                <input type="submit" value="Enviar">
            </form>        
    </div>
    

</body>
</html>