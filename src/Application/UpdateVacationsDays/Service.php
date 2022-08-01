<?php

namespace Fnsc\KidozCodingChallenge\Application\UpdateVacationDays;

use DateTime;
use Fnsc\KidozCodingChallenge\Domain\Contracts\EmployeeRepository;
use Fnsc\KidozCodingChallenge\Domain\Contracts\PayrollRepository;
use Fnsc\KidozCodingChallenge\Domain\Entities\Employee;

class Service
{
    use NewVacationDays;

    public function __construct(
        private readonly EmployeeRepository $employeeRepository,
        private readonly PayrollRepository $payrollRepository
    ) {
    }

    public function handle(): OutputBoundary
    {
        $employees = $this->employeeRepository->getActiveEmployees();
        $today = new DateTime();

        foreach ($employees as $employee) {
            $newVacationDays = $this->getNewVacationDays($employee, $today);
            $this->payrollRepository->updateVacationDays($newVacationDays, $employee->getPayroll());
        }

        $employees = $this->employeeRepository->getActiveEmployees();

        return new OutputBoundary(
            employees: $employees
        );
    }

    private function getNewVacationDays(Employee $employee, DateTime $today): int
    {
        return $this->getYearsEmployed($employee, $today) + $employee->getPayroll()->getVacationDays();
    }
}