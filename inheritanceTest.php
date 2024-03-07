<?php 
    class Animal {
        public function speak() {
            echo "Animal speaks";
        }
    }
    
    class Dog extends Animal {
        public function speak() {
            echo "Dog barks";
        }
    }
    class Puppy extends Dog{
        public function Woke(){
            echo "Woke Woke";
        }
    }
    $puppy = new Puppy();
    $dog = new Dog();
    $dog->speak(); // Outputs: Dog barks
    $puppy->Woke(); // Outputs : Woke Woke 
    