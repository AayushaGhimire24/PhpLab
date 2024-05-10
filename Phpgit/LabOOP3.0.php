<?php
// class Person{
//     //first name of a person
//     private $fname;
//     private $lname;
//     public function setFName($fname){
//         $this->fname=$fname;
//     }
//     //public function to set value for lname
//     public function setLName($lname){
//         $this->lname=$lname;
//     }
//     ///public function to
//     public function showName(){
//         echo "My name is: " .$this->fname."".$this->lname;
//     }
// }
// //calling the public function to set fname and lname
// $ram=setFName("Ram");
// $shrestha=setLName("shrestha");
class Person {
    private $fname;
    private $lname;
    public function setFname($fname) {
        $this->fname = $fname;
    }

    public function setLName($lname) {
        $this->lname = $lname;
    }

    public function showName() {
        echo "My name is: " . $this->fname . " " . $this->lname;
    }
}

// Creating an instance of the Person class
$ram = new Person();
$shrestha = new Person();

// Setting values for fname and lname using the public methods
$ram->setFname("Ram");
$shrestha->setLname("Shrestha");

// Calling the showName method to display the name
$ram->showName();
echo "<br>";
$shrestha->showName();
?>

