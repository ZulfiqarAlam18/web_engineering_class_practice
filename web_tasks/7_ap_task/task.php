<?php

class BankAccount {
    // Properties
    private $accountNumber;
    private $balance;

    // Constructor
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Get account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Get current balance
    public function getBalance() {
        return $this->balance;
    }

    // Deposit money into the account
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount successfully. New balance: {$this->balance}\n";
        } else {
            echo "Deposit amount must be positive.\n";
        }
    }

    // Withdraw money from the account
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew $amount successfully. New balance: {$this->balance}\n";
        } else {
            echo "Invalid withdraw amount. Available balance: {$this->balance}\n";
        }
    }
}

// Example usage
$account = new BankAccount("123456789", 1000);
$account->deposit(5500);
$account->withdraw(200);
$account->withdraw(1500); 

?>
