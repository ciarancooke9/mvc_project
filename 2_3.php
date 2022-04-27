<?php

class User {

    public $name;

    public function sayHello(){
        return $this->name.' says hello';
    }
}

$ciaran = new User();
$ciaran->name = 'ciaran';
echo $ciaran->sayHello();

$user2 = new User();
$user2->name = 'jeff';
echo $user2->sayHello();