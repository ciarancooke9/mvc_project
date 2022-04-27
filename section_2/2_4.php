<?php

class User {

    public $name;
    public $age;

    public function __construct($age,$name){
        echo __CLASS__ . ' instantiated<br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        return $this->name.' says hello my age is '.$this->age;
    }
    //Called when no other references to this object is used
    //Used for cleanup and closing connections etc
    public function __destruct(){
        echo 'destruction<br>';
    }
}

$user = new User(26, 'ciaran');
echo $user->sayHello();

$user2 = new User(29, 'ciara');
echo $user2->sayHello();