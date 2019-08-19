<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Name;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class LastName
{
    private $value;

    public function __construct(string $lastName)
    {
        if (empty($firstName)) {
            throw new InvalidLastName('Last name can\'t empty');
        }

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
