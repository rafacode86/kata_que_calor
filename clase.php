<?php
    enum TypeTemperature: string {
        case Celsius = "Celsius" ;
        case  Kelvin = "Kelvin";
        case Farenheit = "Fahreneit";
    }

    class Temperature {
        private float $temperature;// hacer con float
        private TypeTemperature $typeTemperature;

        public function __construct(float $temperature, TypeTemperature $typeTemperature) {
            $this->temperature = $temperature;
            $this->typeTemperature = $typeTemperature;
        }

        
        public function getTemperature():float {
            return $this->temperature;
        }
        public function getTypetemperature(): TypeTemperature {
            return $this->typeTemperature;
        }
        
    }

?>