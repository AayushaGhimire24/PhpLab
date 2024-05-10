<?php
class person{
    private $name;
    private $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function birthday(){
        $this->age++;
        echo "{$this->name} is celebrating her birthday!She is now {$this->age} years old.\n";
    }
}
$person=new Person('Aayusha',19);
echo "Name:".$person->getName()."<br>";
echo "Age:".$person->getAge()."<br>";
$person->birthday();
?>