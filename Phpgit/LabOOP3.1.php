<?php
class Animal {
    protected $sound;
    protected function echo() {
        echo $this->sound;
    }
}
class Dog extends Animal {
    public function __construct() {
        $this->sound = "Woof Woof!";
    }

    public function bark() {
        $this->echo();
    }
}
// Create an object of the Dog class
$dog = new Dog();
// Call the bark method to make the dog bark
$dog->bark();
?>
