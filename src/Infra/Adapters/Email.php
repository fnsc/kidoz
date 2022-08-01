<?php

namespace Fnsc\KidozCodingChallenge\Infra\Adapters;

use DateTime;
use Fnsc\KidozCodingChallenge\Application\UpdateVacationDays\NewVacationDays;
use Fnsc\KidozCodingChallenge\Domain\Entities\Employee;

class Email
{
    use NewVacationDays;

    public function __construct(private readonly Employee $employee)
    {
    }

    public function dispatch(): void
    {
        $name = $this->employee->getName();
        $yearsEmployed = $this->getYearsEmployed($this->employee, new DateTime());
        $newVacationBalance = $this->employee
            ->getPayroll()
            ->getVacationDays();

        SuperEmail::send(
            $this->employee->getAddressBook()->getEmail(),
            "Good news!",
            "Dear {$name}" . PHP_EOL .
            "based on your {$yearsEmployed} years of employment, you have been granted {$yearsEmployed} days of vacation, bringing your total to {$newVacationBalance}"
        );
    }
}