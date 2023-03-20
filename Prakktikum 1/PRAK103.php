<?php
    //Konstanta Celcius
    $Celcius = 37.841;

    //Rumus konversi suhu dengan celcius
    $Fahrenheit = round((9/5) * $Celcius + 32, 4);
    $Reamur = round((4/5) * $Celcius, 4);
    $Kelvin = round($Celcius + 273.15, 4);

    //Mencetak output
    echo "Fahrenheit (F) = $Fahrenheit";
    echo "<br>Reamur (R) = $Reamur";
    echo "<br>Kelvin (K) = $Kelvin";

?> 