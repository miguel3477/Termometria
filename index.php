<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("light-mode");
            
            document.getElementById("header").classList.toggle("light-mode-header");
            document.getElementById("content").classList.toggle("light-mode-content");
            document.getElementById("bottom").classList.toggle("light-mode-bottom");
        }
    </script>
    <title>Termometria</title>
</head>
<body>
    <div class='container'>
    <form method="post" action="">
        <div class='caixa-header' id='header'><h1>Conversor de Temperatura</h1></div>

        <div class='caixa-content' id='content'>
            <a class='texto' id='texto'><b>Digite a temperatura:</b></a><input type="text" name="temperatura" id="temperatura" placeholder="Temperatura...">
            <select name="temp1" id="temp1">
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select><br>
            <br>

            <a class='texto' id='texto2'><b>Converter para:</b></a><select name="temp2" id="temp2">
                <option value="Celsius">Celsius</option>
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Kelvin">Kelvin</option>
            </select><br>
            <?php include 'calculo.php'; ?>
        </div>
            
        <input class='caixa-bottom' id='bottom' type="submit" value="Converter"><br>
        </form>
        
        <button onclick="myFunction()">Light Theme</button> 

    </div>
</body>
</html>