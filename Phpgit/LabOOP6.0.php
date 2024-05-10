<?php
class Person{
    private $age;
    public function setAge($age){
        if($age>=0 && $age<=120){
            $this->age=$age;
        }else{
            echo "Invalid age value";
        }
    }
    public function getAge(){
        return $this->age;
    }
}
$person=new Person();
$person->setAge(25);//using setter
echo $person->getAge();//using getter
?>