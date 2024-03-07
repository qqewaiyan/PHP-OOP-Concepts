<?php 
 // This file is about testing the interfaces and abstract class! 
 interface Hero{
    public function BasicAttack();
 }

 class Dps implements Hero{
    private $damage;
    private $name;
    public function __construct($name,$damage){
        $this->name = $name;
        $this->damage = $damage;
    }
    
    public function BasicAttack(){
        echo  $this->name." basic attack is ".$this->damage.PHP_EOL;
        
    
    }
 }

 $Juggernaut = new Dps("Juggernaut","50-54");
 $AntiMage = new Dps("Anti-Mage","45-49");
 $AntiMage->BasicAttack(); 
 $Juggernaut->BasicAttack();

 abstract class StrHero{
    public abstract function getStr();

    public function getStamina(){
        echo "Look I just gained stamina";
    }
 }

 class Undying extends StrHero{
    public function getStr(){
        echo "Undying increase strength per level";
    }
 }

 $Undying = new Undying();
 $Undying->getStr();
