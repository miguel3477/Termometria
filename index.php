<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Termometria</title>
</head>
<body>
    <form class="form-inline" method="post" action="index.php">
    <div class='container'>
        <div class='caixa' id='header'><h1>Conversor de Temperatura</h1></div>
        <div class='caixa' id='content'>
            <a class='texto'><b>Digite a temperatura:</b></a><input type="text" name="temperatura" id="temperatura" placeholder="Temperatura...">
            <select name="temp1" id="temp1">
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select><br>
            <br>
            <a class='texto'><b>Converter para:</b></a><select name="temp2" id="temp2">
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select><br>
            <?php include 'calculo.php'; ?>
        </div>
        <input id='bottom' type="submit" value="Converter"><br>
    </div>
    </form>
</body>
</html>