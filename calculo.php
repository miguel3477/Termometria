<?php
    if (isset($_POST['temperatura'])) {
    $temperatura = $_POST ['temperatura'];
    $temp1 = $_POST ['temp1'];
    $temp2 = $_POST ['temp2'];
    }

    if (isset($temp1) && ($temp2) && ($temperatura)) {
        if ($temp1=='Celsius' && $temp2=='Kelvin'){
            echo "<h1>", number_format((float)($temperatura + 273),1,',',''),' K',"</h1>";
        }
        else if ($temp1=='Kelvin' && $temp2=='Celsius'){
            echo "<h1>",number_format((float)($temperatura - 273),1,',',''),' ºC',"</h1>";
        }
        else if ($temp1=='Fahrenheit' && $temp2=='Kelvin'){
            echo "<h1>",number_format((float)(($temperatura - 32) * (5/9) + 273),1,',',''),' K',"</h1>";
        }
        else if ($temp1=='Kelvin' && $temp2=='Fahrenheit'){
            echo "<h1>",number_format((float)(($temperatura - 273) * 1.8 + 32),1,',',''),' ºF',"</h1>";
        }
        else if ($temp1=='Celsius' && $temp2=='Fahrenheit'){
            echo "<h1>",number_format((float)($temperatura * 1.8 + 32),1,',',''),' ºF',"</h1>";
        }
        else if ($temp1=='Fahrenheit' && $temp2=='Celsius'){
            echo "<h1>",number_format((float)(($temperatura - 32) / 1.8),1,',',''),' ºC',"</h1>";
        }
        else if ($temp1 == $temp2){
            echo "<h1>",'Mesma coisa',"</h1>";
        }
    }
?>