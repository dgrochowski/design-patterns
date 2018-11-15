<?php

namespace Behavioral\State;

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

    public function getBalance(): int
    {
        return $this->balance;
    }
}
