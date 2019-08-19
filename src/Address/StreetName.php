<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Address;

use Assert\Assertion;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class StreetName
{
    private $value;

    public function __construct(string $streetName)
    {
        Assertion::notEmpty($streetName);

        $this->value = $streetName;
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
