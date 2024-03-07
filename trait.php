<?php 
 trait Spell{
    private $spell;
    public function __construct($spell){
        $this->spell = $spell;
    }
    public function Multicast(){
        
        return $this->spell*random_int(2,4)." Damage Doned";

    }
 }
 class OrgeMagi{
    use Spell;
 }

 $fireBlast = new OrgeMagi(310);

 echo $fireBlast->Multicast();