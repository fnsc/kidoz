<?php

namespace Fnsc\KidozCodingChallenge\Domain\ValueObjects;

final class AddressBook
{
    public function __construct(
        private readonly string $empId,
        private readonly string $first,
        private readonly string $last,
        private readonly string $email,
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
     * @return string
     */
    public function getFirst(): string
    {
        return $this->first;
    }

    /**
     * @return string
     */
    public function getLast(): string
    {
        return $this->last;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

}