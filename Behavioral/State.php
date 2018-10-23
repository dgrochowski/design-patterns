<?php

interface State
{
    public function __toString(): string;
}

final class StartedState implements State
{
    public function __toString(): string
    {
        return 'started';
    }
}

final class ApprovedState implements State
{
    public function __toString(): string
    {
        return 'approved';
    }
}

final class RejectedState implements State
{
    public function __toString(): string
    {
        return 'rejected';
    }
}

interface Context
{
    public function getState(): State;
    public function setState(State $state): void;
}

class Payment implements Context
{
    private $state;

    public function __construct()
    {
        $this->setState(new StartedState());
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
        echo 'Payment status: ' . $this->getState() . "\n";
    }
}

/**
 * This class is out of State pattern
 */
final class BankAccount
{
    private $balance;

    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }

    public function transfer(int $money, Payment $payment): void
    {
        echo "Transfering $money$ from account\n";

        $newBalance = $this->balance - $money;
        if ($newBalance >= 0) {
            $this->balance = $newBalance;

            $payment->setState(new ApprovedState());
            return;
        }

        echo "Insufficient amount of money!\n";
        $payment->setState(new RejectedState());
    }
}

/** EXAMPLE */

$bankAccount = new BankAccount(40);
$bankAccount->transfer(20, new Payment()); echo "\n";
$bankAccount->transfer(30, new Payment()); echo "\n";
$bankAccount->transfer(10, new Payment()); echo "\n";
