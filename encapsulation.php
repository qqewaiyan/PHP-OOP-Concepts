<?php 
    class BankAccount {
        private $balance = 0;
        public function deposit($amount) {
            $this->balance += $amount;
        }
        public function getBalance() {
            return $this->balance;
        }
    }
    
    $account = new BankAccount();
    $account->deposit(100000);
    echo $account->getBalance()." MMK"; // Outputs: 1000000 MMK
    