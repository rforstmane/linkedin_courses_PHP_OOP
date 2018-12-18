<?php
class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;
    public $weight_kg;
    public $condition_id;

    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
    public const GENDERS = ['Mens', 'Womens', 'Unisex'];

    protected const CONDITION_OPTIONS = [1=>'Beat up', 2=>'Decent', 3=>'Good', 4=>'Great', 5=>'Like New'];

    public function __construct($args=[])
    {
        $this->brand = isset($args['brand']) ? $args['brand'] : '';
        $this->model= isset($args['model']) ? $args['model'] : '';
        $this->year = isset($args['year']) ? $args['year'] : '';
        $this->category = isset($args['category']) ? $args['category'] : '';
        $this->color = isset($args['color']) ? $args['color'] : '';
        $this->description = isset($args['description']) ? $args['description'] : '';
        $this->gender = isset($args['gender']) ? $args['gender'] : '';
        $this->price = isset($args['gender']) ? $args['gender'] : 0;
        $this->weight_kg = isset($args['weight_kg']) ? $args['weight_kg'] : 0.0;
        $this->condition_id = isset($args['condition_id']) ? $args['condition_id'] : 3;
    }

    public function weight_kg() {
        return number_format($this->weight_kg,2) . ' kg';
    }

    public function set_weight_kg($value) {
        $this->weight_kg = floatval($value);

    }

    public function weight_lbs() {
        $weight_lbs = floatval($this->weight_kg) * 2.0462262;
        return number_format($weight_lbs, 2) . ' lbs';
    }

    public function set_weight_lbs($value) {
        $this->weight_kg= floatval($value) / 2.0462262;
    }

    public function condition() {
        if ($this->condition_id > 0) {
            return self::CONDITION_OPTIONS[$this->condition_id];
        } else {
            return "Unknown";
        }
    }
}

?>