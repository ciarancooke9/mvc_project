<?php
class User {

    private $name;
    private $age;

    public function __construct($age,$name){
        $this->name = $name;
        $this->age = $age;
    }

    //getter
    public function getName(){
        return $this->name;
    }

    //setter
    public function setName($name){
        $this->name = $name;
    }

    // __get MAGIC METHOD
    public function __get($property){
        if (property_exists($this, $property)){
            return $this->$property;
        }
        return $this->$property;
    }

    // __set MAGIC METHOD
    public function __set($property, $value){
        if (property_exists($this, $property)){
            $this->$property = $value;
        }
        return $this;
    }

    //Called when no other references to this object is used
    //Used for cleanup and closing connections etc
    public function __destruct(){
    }
}

$user = new User(26, 'ciaran');
//echo $user->getName();
//$user->setName('Phil');
//echo $user->getName();

$user->__set('age', 40);
echo $user->__get('age');
$user->__set('age', 40);
