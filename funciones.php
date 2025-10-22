<?php

    function converter(int $temperature, TypeTemperature $typeTemperature) {
        
        if ($typeTemperature === TypeTemperature::Celsius) {
            $kelvin = $temperature + 273.15;
            $farhenheit = ($temperature * (9/5)) + 32;
            echo "Celsius: $temperature, Kelvin: $kelvin, Farenheit: $farhenheit\n";
        }
        else if ($typeTemperature === TypeTemperature::Kelvin) { //Falta ajustar formulas no salen bien, o puede que enunciado sea incorrecto??
            $celsius = ($temperature - 273.15);
            $farhenheit = ($temperature - 273.15) * (9/5) + 32;
            echo "Kelvin: $temperature, Celsius: $celsius, Farenheit: $farhenheit\n";
        }
        else{
            $celsius = (($temperature - 32) * (5/9));
            $kelvin = (($temperature - 32) * (5/9)) + 273.15;
            echo "Farenheit: $temperature, Celsius: $celsius, Kelvin: $kelvin\n";
        }

    }


?>