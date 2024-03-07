<?php 

    interface Passive{
        public function heroPassive();
    }

    Class Axe implements Passive{
        private $skill3;
        public function __construct($skill3){
            $this->skill3 = $skill3;
        }

        public function heroPassive(){
            return "This is ".$this->skill3. "spell";
        }
    }
    Class DrowRanger implements Passive{
        private $skill3;
        private $ulti;
        public function __construct($skill3,$ulti){
            $this->skill3 = $skill3;
            $this->ulti = $ulti;

        }
        public function heroPassive(){
            return "this is ".$this->skill3." and ".$this->ulti." spell";
        }
    }
    $Axe = new Axe("Counter Helix");
    $DrawRanger = new DrowRanger("Trueshot Aura","Marksmanship");

   echo $Axe->heroPassive();
  echo  $DrawRanger->heroPassive();
