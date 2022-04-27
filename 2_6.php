<?php

class User {
    protected $name;
    protected $age;

    public function __construct($age,$name){
        $this->name = $name;
        $this->age = $age;
    }
}

class Customer extends User {
    private $balance;

    public function __construct($age, $name, $balance){
        parent::__construct($age,$name);
        $this->balance = $balance;
    }

    public function pay($amount){
        return $this->name . ' paid $' . $amount;
    }

    public function getBalance(){
        return $this->balance;
    }
}

$customer1 = new Customer(40, 'John', 5000);
echo $customer1->pay(100);
echo $customer1->getBalance();