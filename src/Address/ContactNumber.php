<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Address;

use Assert\Assertion;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class ContactNumber
{
    private $phoneNumber;

    private $email;

    public function __construct(string $phoneNumber, ?string $email)
    {
        Assertion::notEmpty($phoneNumber);

        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}
