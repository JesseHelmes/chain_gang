<?php
/**
 * Created by PhpStorm.
 * User: jesse
 * Date: 3-4-2019
 * Time: 14:35
 */

class bicycle{
    const catergorie = ["Road", "Mountain", "Hybrid", "Cruiser", "City", "BMX"];
    const genders = ["mens", "womens", "unisex"];
// properties
    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;

    protected $condition_id;

    const Condition_options = [
        1 => 'Beat up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New'];

    protected $weight_kg;

    //https://www.lynda.com/PHP-tutorials/Constructor-arguments/633867/679960-4.html?autoplay=true
    public function __construct($brand, $model, $year, $category, $color, $description, $gender, $price)
    //public function __construct($args=[])
    {

        //$this->brand = isset($args['brand']) ? $args['brand'] : '';
        //$this->model = $args['model'];
        //$this->year = $args['year'];

        if($category < 0 ){
            $category = 0;
        }
        if($category > count(self::catergorie)){
            $category = count(self::catergorie) - 1;
        }
        $this->category = self::catergorie[$category];

        //$this->category = $args['catergory'];
        //$this->color = $args['color'];
        //$this->description = $args['discription'];
        //$this->gender = $args['gender'];

        if($gender < 0 ){
            $gender = 0;
        }
        if($gender > count(self::genders)){
            $gender = count(self::genders) - 1;
        }
        $this->gender = self::genders[$gender];

        //$this->price = $args['price'];
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        //$this->category = $category;
        $this->color = $color;
        $this->description = $description;
        //$this->gender = $gender;
        $this->price = $price;

    }

    public function setWeightKg($weight_kg)
    {
        $this->weight_kg = $weight_kg;
    }

    public function getWeightKg(){
        return number_format($this->weight_kg,2) . " kg";
    }

    public function setWeightLbs($value)
    {
        $this->weight_kg = $value / 2.2046226218;
    }

    public function getWeightLbs(){
        $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
        return number_format($weight_lbs,2)  . " lbs";
    }

    public function condition(){
        /*
        if($this->condition_id < 1){
            $this->condition_id = 1;
        }
        if($this->condition_id > 5){
            $this->condition_id = 5;
        }
        return self::Condition_options[$this->condition_id];*/
        if($this->condition_id > 0){
            return self::Condition_options[$this->condition_id];
        }else {return "Unkown";}
    }

}

$test = new bicycle("brandtest", "modeltest", 1999, 4, "black", "beschrijving", 7, 99.99);
//$test = new bicycle(['brand'] = "brandtest");
echo $test->brand . "<br>";
echo $test->model . "<br>";
echo $test->year . "<br>";
echo $test->category . "<br>";
echo $test->color . "<br>";
echo $test->description . "<br>";
echo $test->gender . "<br>";
echo $test->price . "<br>";
$test->setWeightKg(99);
echo $test->getWeightKg() . "<br>";

$test->setWeightLbs(99);
echo $test->getWeightLbs() . "<br>";
echo $test->condition() . "<br>";
?>
