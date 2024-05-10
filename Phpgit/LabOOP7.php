<?php
class Human{
    //public property name
    public $name;
    //public function walk
    public function talk(){
        echo $this->name . " is talking...<br/>";
    }
    
    public function ignore(){
        echo $this->name . " is ignoring...<br/>";
    }
}
//child class
class Male extends Human{
    //no codes
}
//child class
class Female extends Human{
    //no codes
}
$male=new Male();
$male->name="Aayush";
$female=new Female();
$female->name="Aayusha";
//calling human class methods
$female->talk();
$male->ignore();
?>