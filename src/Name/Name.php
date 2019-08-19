<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Name;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class Name
{
    private $firstName;

    private $lastName;

    public function __construct(FirstName $firstName, LastName $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName->getValue();
    }

    public function getLastName(): string
    {
        return $this->lastName->getValue();
    }

    public function getFullName(): string
    {
        return sprintf('%s %s', $this->getFirstName(), $this->getLastName());
    }
}
