<?php

class Human {
    // свойства (переменные)
    protected $name; // доступ к свойству за пределами класса
    protected $weight; //
    private $age; //

    public function __construct($name, $weight, $age)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->age = $age;
    }

    // методы (функции)
    public function run() {
        echo "беги";
    }

    public function getAge() {
        return $this->age;
    }
}

$person = new Human('Миша', '75', '23');
$person2 = new Human('Вася', '65', '34');


abstract class Animal {
    public function run(){}
    public function eat(){}
    public function say(){}
}

class Cat extends Animal { // Наследование
    public function say() {
        echo "miaw";
    }
}
class Dog extends Animal { // Наследование
    public function say() {
        echo "gav";
    }
}

class Post {
    public function getTitle() {
        echo "Title common";
    }
}

class News extends Post {
    public function getTitle()
    {
        echo "Title news";
    }
}

class Article extends Post {
    public function getTitle()
    {
        echo "Title article";
    }
}

?>