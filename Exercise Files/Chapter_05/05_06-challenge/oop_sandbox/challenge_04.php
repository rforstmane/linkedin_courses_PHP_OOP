<?php

class Bicycle {


    protected static $wheels = 2;
    public static $instance_count = 0;

    const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];


    public static function wheel_details() {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : "2 wheels";
        return "It has " . $wheel_string . ".";
    }

    public static function create() {
        $class_name = get_called_class();
        $obj = new $class_name;
        self::$instance_count++;
        return $obj;

    }


}

class Unicycle extends Bicycle {
    // visibility must match property being overridden
    protected static $wheels = 1;
}

$trek = new Bicycle;
$uni = new Unicycle;

echo "Bicycle: " . Bicycle::wheel_details() . "<br />";
echo "Unicycle: " . Unicycle::wheel_details() . "<br />";
echo "<hr />";

echo "Bicycle count: " . Bicycle::$instance_count. "<br />";
echo "Unicycle count: " . Unicycle::$instance_count. "<br />";

$bike = Bicycle::create();
$uni = Unicycle::create();

echo "Bicycle count: " . Bicycle::$instance_count. "<br />";
echo "Unicycle count: " . Unicycle::$instance_count. "<br />";
echo "<hr />";





?>
