<?php

namespace Fnsc\KidozCodingChallenge\Presenters\CLI;

use Exception;
use Fnsc\KidozCodingChallenge\Application\UpdateVacationDays\Service;
use Fnsc\KidozCodingChallenge\Infra\Adapters\Email;
use Fnsc\KidozCodingChallenge\Infra\Adapters\Event;

class EmployeesVacationCommand
{
    private const SUCCESS = 1;
    private const FAILURE = 0;

    public function __construct(
        private readonly Service $service,
    ) {
    }

    public function handle(): int
    {
        try {
            $result = $this->service->handle();

            foreach ($result->getEmployees() as $employee) {
                Event::queue(new Email($employee));
            }

            return self::SUCCESS;
        } catch (Exception $exception) {
            echo $exception->getMessage();

            return self::FAILURE;
        }
    }
}