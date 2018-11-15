<?php

namespace Tests;

use Behavioral\State\BankAccount;
use Behavioral\State\Payment;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testBankAccount()
    {
        $bankAccount = new BankAccount(40);
        $this->assertSame(40, $bankAccount->getBalance());

        $bankAccount->transfer(20, new Payment);
        $this->assertSame(20, $bankAccount->getBalance());

        $bankAccount->transfer(30, new Payment);
        $this->assertSame(20, $bankAccount->getBalance());

        $bankAccount->transfer(10, new Payment);
        $this->assertSame(10, $bankAccount->getBalance());

        echo "\n";
    }
}
