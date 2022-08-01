<?php

namespace Fnsc\KidozCodingChallenge\Domain\Contracts;

use Fnsc\KidozCodingChallenge\Domain\Entities\Employee;

interface EmployeeRepository
{
    /**
     * @return Employee[]
     */
    public function getActiveEmployees(): array;

    public function findById(string $id): Employee;
}