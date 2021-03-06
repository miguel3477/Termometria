<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Termometria</title>
    <script>
        function light() {
            localStorage.setItem ('theme', 'light');
            myFunction();
        }

        function dark() {
            localStorage.setItem ('theme', 'dark');
            myFunction();
        }

        function myFunction() {
            var userMode = localStorage.getItem ('theme');

            if (userMode == 'light') {
                document.getElementsByTagName("BODY")[0].style.backgroundColor = "white";

                document.getElementById("header").style.backgroundColor = "#7B0F28";
                document.getElementById("content").style.backgroundColor = "#EC6988";
                document.getElementById("bottom").style.backgroundColor = "#D61A46";
                document.getElementById("bottom").style.borderColor = "#D61A46";
            }
            else if (userMode == 'dark') {
                document.getElementsByTagName("BODY")[0].style.backgroundColor = "#000000e1";

                document.getElementById("header").style.backgroundColor = "#600073";
                document.getElementById("content").style.backgroundColor = "blueviolet";
                document.getElementById("bottom").style.backgroundColor = "#aa00cc";
                document.getElementById("bottom").style.borderColor = "#aa00cc";
            }
        }
    </script>
</head>
<body class="dark-theme" onload="myFunction()">
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
                  
    </div>
    <div><button id="light" onclick="light()"></button><button id="dark" onclick="dark()"></button></div>
</body>
</html>