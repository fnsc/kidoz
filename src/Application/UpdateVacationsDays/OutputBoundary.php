<?php

namespace Fnsc\KidozCodingChallenge\Application\UpdateVacationDays;

use Fnsc\KidozCodingChallenge\Domain\Entities\Employee;

class OutputBoundary
{
    /**
     * @param Employee[] $employees
     */
    public function __construct(
        private readonly array $employees
    ) {
    }

    /**
     * @return Employee[]
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }
}