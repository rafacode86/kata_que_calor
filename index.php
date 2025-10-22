<?php
/*Kata 63 per l'especialitat fullstackPHP 24-7-25

És estiu! Fa calor! Bé, potser avui concretament no tanta, però en general, fa calor.

Ara bé? "Quanta" calor?

Fes un programa que, donat un número de graus, i una escala(Celsius,Kelvin o Farenheit) faci la conversió de graus a la resta d'escales.

Input

23 Celsius
321 Kelvin
Output

Celsius: 23 Kelvin:296.15 Farenheit: 73.4
Kelvin: 321 Celsius: 46.85 Farenheit: 116.33*/

    require_once "clase.php";
    require_once "funciones.php";

    $input1 = new Temperature(23, TypeTemperature::Celsius);
    $input2 = new Temperature(321, TypeTemperature::Kelvin);

    converter($input1->getTemperature(), $input1->getTypeTemperature());
    converter($input2->getTemperature(), $input2->getTypeTemperature());
   


