<?php

class Bicycle {

    var $brand = 'Merida';
    var $model = 'kalnu velosipeds';
    var $year = 2016;
    var $description;
    var $weight_kg = 5;

    function name(){
        return $this->brand . ", " . $this->model . ", " . $this->year;
    }

    function weight_lbs(){
        return $this->weight_kg * 2.20462;
    }

    function set_weight_lbs(){

    }
}

$bicycle1 = new Bicycle;
echo $bicycle1->name() . "<br />";
echo $bicycle1->weight_lbs() . "<br />";
?>