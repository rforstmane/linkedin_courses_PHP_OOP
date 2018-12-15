<?php

class Bicycle {

    private $weight_kg = 0.0;
    protected $wheels = 2;

    public function set_kg($value) {
        $this->weight_kg = $value;
    }

    public function get_kg() {
        return $this->weight_kg . " kg";
    }

    public function weight_lbs() {
        $weight_lbs =  floatval($this->weight_kg) * 2.2046226218;
        return $weight_lbs . " lbs";
    }

    public function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

    public function wheel_detail() {
        $wheel_det = $this->wheels == 1 ? "It has " . $this->wheels . " wheels" : "It has ". $this->wheels. " wheels";
        return $wheel_det;
    }

}

class Unicycle extends Bicycle {
    protected $wheels = 1;
}

$trek = new Bicycle;
$uni = new Unicycle;



echo "Bicycle: " . $trek->wheel_detail() . "<br />";
echo "Unicycle: " . $uni->wheel_detail() . "<br />";

$trek->set_kg(2);
echo $trek->get_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";

$trek->set_weight_lbs(4);
echo $trek->weight_lbs() ."<br />";
echo $trek->get_kg()."<br />";



//echo $trek->weight_kg . "<br />";
//echo $trek->weight_lbs() . "<br />";
//// notice that one is property, one is a method
//
//$trek->set_weight_lbs(2);
//echo $trek->weight_kg . "<br />";
//echo $trek->weight_lbs() . "<br />";

?>
