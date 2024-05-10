<?php
//parent class
class Vehicle{
    //public property name
    public $name;
    //public method
    /*final*/ public function drive(){//final doesnot let overriding 
        echo "Vehicle class drive method...<br/>";
    }
}
//child class
class Car extends Vehicle{
    public function drive(){
        echo $this->name."car drive method...<br/>";
    }
}
//child class
class Motorcycle extends Vehicle{
    public function drive(){
        echo $this->name."Motorcycle class drive method...<br/>";
    }
}
$car=new Car();
$car->name="Mercedes Benz";
//calling child class method
$car->drive();
$bike=new Motorcycle();
$bike->name="Triumph Tiger";
//calling child method
$bike->drive();
?>