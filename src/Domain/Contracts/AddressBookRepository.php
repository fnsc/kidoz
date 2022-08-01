<?php

namespace Fnsc\KidozCodingChallenge\Domain\Contracts;

use Fnsc\KidozCodingChallenge\Domain\Entities\Employee;
use Fnsc\KidozCodingChallenge\Domain\ValueObjects\AddressBook;

interface AddressBookRepository
{
    public function findByEmployeeId(Employee $employee): AddressBook;
}