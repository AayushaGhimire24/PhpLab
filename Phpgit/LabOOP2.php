<?php
$object =new user;//class name is insensitive
print_r($object);echo "<br>";
$object->name="joe";
$object->password="mypass";
print_r($object); echo "<br>";
$object->save_User();//function name is also insensitive
class User{
    public $name,$password;
    function save_user(){
        echo "save user code goes here";
    }
}
?>