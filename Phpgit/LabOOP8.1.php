<?php
// Define an abstract class
abstract class Animal {
    abstract public function sound();
}

// Implement the abstract class in different subclasses
class Dog extends Animal {
    public function sound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function sound() {
        return "Meow!";
    }
}

// Create objects of different subclasses
$dog = new Dog();
$cat = new Cat();

// Call the makeSound() method polymorphically
echo "Dog says: " . $dog->sound() . "<br>";
echo "Cat says: " . $cat->sound() . "<br>";
?>
