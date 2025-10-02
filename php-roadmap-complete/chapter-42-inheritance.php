<?php
// Chapter 42: Inheritance
class Animal { public function speak(){ return '...'; } }
class Dog extends Animal { public function speak(){ return 'Woof!'; } }
$d = new Dog(); echo $d->speak() . "\n";
?>