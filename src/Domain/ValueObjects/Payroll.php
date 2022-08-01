<?php

namespace Fnsc\KidozCodingChallenge\Domain\ValueObjects;

final class Payroll
{
    public function __construct(
        private readonly string $empId,
        private readonly int $vacationDays
    ) {
    }

    /**
     * @return string
     */
    public function getEmpId(): string
    {
        return $this->empId;
    }

    /**
     * @return int
     */
    public function getVacationDays(): int
    {
        return $this->vacationDays;
    }
}