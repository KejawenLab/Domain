<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Name;

use Assert\Assertion;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class FirstName
{
    private $value;

    public function __construct(string $firstName)
    {
        Assertion::notEmpty($firstName);

        $this->value = $firstName;
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
