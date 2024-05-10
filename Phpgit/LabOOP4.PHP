<?php
class Person{
    private $fname;
    private $lname;
    public function __construct($fname,$lname){
        echo "Initializing the object...<br/>";
        $this->fname=$fname;
        $this->lname=$lname;
    }
    public function showName(){
        echo "My name is".$this->fname."".$this->lname;
    }
}
$per=new Person("Aayusha","Ghimire");
echo "<br>";
$per->showName();
class demo{
    public function __construct(){
        echo "<br>";
        echo "construct2...";
    }
    public function __destruct(){
        echo "destroy";
    }
}
$obj=new demo();
?>