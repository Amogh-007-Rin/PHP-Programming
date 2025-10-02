<?php
// Chapter 41: OOP basics: class, properties, methods
class Person {
    public $name;
    public function __construct($name){ $this->name = $name; }
    public function greet(){ return "Hi, I'm " . $this->name; }
}
$p = new Person('Amogh'); echo $p->greet() . "\n";
?>