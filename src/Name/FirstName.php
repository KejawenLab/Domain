<?php

declare(strict_types=1);

namespace KejawenLab\Domain\Name;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class FirstName
{
    private $value;

    public function __construct(string $firstName)
    {
        if (empty($firstName)) {
            throw new InvalidFirstName('First name can\'t empty');
        }

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
