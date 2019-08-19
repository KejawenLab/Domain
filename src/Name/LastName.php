<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Name;

use Assert\Assertion;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class LastName
{
    private $value;

    public function __construct(string $lastName)
    {
        Assertion::notEmpty($lastName);

        $this->value = $lastName;
    }

    public function getValue(): string
    {
        return  $this->value;
    }

    public function __toString()
    {
        return $this->getValue();
    }
}
