<?php

namespace Fnsc\KidozCodingChallenge\Domain\Contracts;

use Fnsc\KidozCodingChallenge\Domain\Entities\Employee;
use Fnsc\KidozCodingChallenge\Domain\ValueObjects\Payroll;

interface PayrollRepository
{
    public function findByEmployeeId(Employee $employee): Payroll;

    public function updateVacationDays(int $newVacationDays, Payroll $payroll): bool;
}