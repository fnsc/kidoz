<?php

namespace Fnsc\KidozCodingChallenge\Application\UpdateVacationDays;

use DateTime;
use Fnsc\KidozCodingChallenge\Domain\Entities\Employee;

trait NewVacationDays
{
    private function getYearsEmployed(Employee $employee, DateTime $today): int
    {
        return $employee->getStartDate()->diff($today)->format('%y');
    }
}