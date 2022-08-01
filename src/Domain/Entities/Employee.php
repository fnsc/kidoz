<?php

namespace Fnsc\KidozCodingChallenge\Domain\Entities;

use DateTimeImmutable;
use Fnsc\KidozCodingChallenge\Domain\ValueObjects\AddressBook;
use Fnsc\KidozCodingChallenge\Domain\ValueObjects\Payroll;

final class Employee
{
    public function __construct(
        private readonly string $id,
        private readonly string $name,
        private readonly AddressBook $addressBook,
        private readonly Payroll $payroll,
        private readonly DateTimeImmutable $startDate,
        private readonly ?DateTimeImmutable $endDate = null,
    ) {
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getStartDate(): DateTimeImmutable
    {
        return $this->startDate;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getEndDate(): ?DateTimeImmutable
    {
        return $this->endDate;
    }

    /**
     * @return AddressBook
     */
    public function getAddressBook(): AddressBook
    {
        return $this->addressBook;
    }

    /**
     * @return Payroll
     */
    public function getPayroll(): Payroll
    {
        return $this->payroll;
    }
}